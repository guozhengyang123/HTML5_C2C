(function(window, undefined){
		  
	if (window.nph){
		return; 
	}
	
	var $ = window.NTES,
        nph = window.nph = {};
		
	function addStylesheetRules (rules) {   
		var style = document.createElement('style');   
		
		$.one('body').appendChild(style);   
		if (!window.createPopup) { /* For Safari */  
		   style.appendChild(document.createTextNode(''));   
		}
		var s = document.styleSheets[document.styleSheets.length - 1];   
		for (var selector in rules) {   
			if (s.insertRule) {   
				s.insertRule(selector + '{' + rules[selector] + '}', s.cssRules.length);   
			}   
			else { /* IE */  
				s.addRule(selector, rules[selector], -1);   
			}   
		}   
	}  
		
	var photoViewMode = {
		0: function(index){
			var t = this;
			return {
				prev: index > 0 ? '#p=' + t.photoInfo[index - 1].id : '#p=' + t.photoInfo[t.size - 1].id,
				next: index < t.size - 1 ? '#p=' + t.photoInfo[index + 1].id : '#p=' + t.photoInfo[0].id
			};
		},
		1: function(index){
			var t = this;
			return {
				prev: index > 0 ? '#p=' + t.photoInfo[index - 1].id : t.$prevSet.href,
				next: index < t.size - 1 ? '#p=' + t.photoInfo[index + 1].id : t.$nextSet.href
			};
		}
	};
		
	function Gallery(option){ 
		var t = this,
			sn = option.sn || '',
			ids = ['gallery', 'galleryTpl', 'galleryRelat', 'modePhoto', 'modeStream', 'modeSearch', 'setInfo', 'photoType', 'streamType', 'viewOrig', 'viewStream', 'viewPhoto', 'scrl', 'bar', 'thumb', 'scrlPrev', 'scrlNext', 'photo', 'photoIndex', 'photoDesc', 'photoView', 'photoPrev', 'photoNext', 'photoLoading', 'stream', 'search' ,'searchInput', 'searchPhoto', 'searchTheme', 'prevSet', 'nextSet', 'photoList'],
			i = ids.length;
		
		t.turn = photoViewMode[isNaN(option.photoViewMode) ? 0 : option.photoViewMode];
		
		while(--i >= 0){
			t['$' + ids[i]] = $('#' + ids[i] + sn);
		}
		
		t.photoIndex = {};
		t.photoInfo = [];
		t.streamSize = {};
		
		t.$thumb.attr('innerHTML', t.$photoList.value);
		t.$thumbs = t.$thumb.$('> li');
		t.size = t.$thumbs.length;
		
		var pWidth = t.$photoView.offsetWidth,
			pHeight = t.$photoView.offsetHeight;
			uWidth = 106,
			tWidth = uWidth * t.size,
			tCntWidth = t.$thumb.parentNode.offsetWidth,
			tNum = Math.floor(tCntWidth / uWidth);
		
		tCntWidth = uWidth * tNum;
		t.$photoView.addCss({ width: pWidth + 'px' });
		t.$thumb.addCss({width: tWidth + 'px'});
		t.$scrl.addCss({ width: (tCntWidth + 60) + 'px' });
		
		var bCntWidth = t.$bar.parentNode.offsetWidth,
			bWidth = Math.max(36, Math.min(tCntWidth * bCntWidth / tWidth, bCntWidth));
		
		t.$bar.addCss({width: bWidth + 'px'});
		
		t.$thumbs.each(function(i) {
			var self = this,
				id = t.parseObj($.one('> a', self).href).p,
				mult = Math.max(0, Math.min(i - Math.floor((tNum + 1) / 2) + 1, t.size - tNum));
				
			t.photoInfo.push({
				id: id,
				title: $.one('> h2', self).attr('innerHTML'),
				desc: $.one('> p', self).attr('innerHTML'),
				img: $.one('> i[title=img]', self).attr('innerHTML'),
				timg: $.one('> i[title=timg]', self).attr('innerHTML'),
				aimg: $.one('> i[title=aimg]', self) ? $.one('> i[title=aimg]', self).attr('innerHTML') : '',
				pos: uWidth * mult
			});
			t.photoIndex[id] = i;
		}); 
		
		t.bar = new $.ui.Scroll(t.$thumb, 'x', t.$bar);
		
		$([t.$scrlPrev, t.$scrlNext, t.$bar]).addEvent('click', function(ev){ ev.preventDefault(); });
		t.$scrlPrev.addEvent('mousedown', t.bar.start.bind(t.bar, 'forward')).addEvent('mouseup,mouseout', t.bar.stop.bind(t.bar));
		t.$scrlNext.addEvent('mousedown', t.bar.start.bind(t.bar, 'backward')).addEvent('mouseup,mouseout', t.bar.stop.bind(t.bar));
		
		$([t.$photoPrev, t.$photoNext].concat(t.$thumbs.$('> a'))).addEvent('click', function(ev){
			var oHash = t.parseObj(this.href);
			
			if(oHash.p){
				ev.preventDefault();	
				
				t.showPhoto(oHash.p).changeHash('p=' + oHash.p).stats();
			}
		});
				
		t.$photo.addEvent('load', function(){
			'string' !== typeof this.style.maxWidth && t.resize(this, { width: pWidth, height: pHeight });
			t.$photoLoading.addCss('hidden');
			
			var oHash = t.parseObj(t.$photoNext.href);
			
			if(oHash.p){
				(new Image).src = t.photoInfo[t.photoIndex[oHash.p]].img;
			}
		});
		
		if(t.$searchPhoto || t.$viewStream){
			var sHeight = pHeight + 130,
				rules = {};
		
			t.streamSize.cols = Math.floor(pWidth / 180);
			t.streamSize.rows = Math.floor(sHeight / 215);
			t.streamSize.size = t.streamSize.cols * t.streamSize.rows;
			t.total = Math.ceil(t.size / t.streamSize.size);
		
			rules[String.format('#gallery%1 .nph_list_stream', sn)] = String.format('width:%1px;height:%2px;', pWidth, sHeight);
			rules[String.format('#gallery%1 .nph_list_stream li', sn)] = String.format('width:%1px;height:%2px;', Math.floor(pWidth / t.streamSize.cols), Math.floor(sHeight / t.streamSize.rows));
			addStylesheetRules(rules);
			
			$.ui.Template.load(t.$galleryTpl.$('> div'));
			
			t.$viewStream && t.$viewStream.addEvent('click', function(ev){ ev.preventDefault(); t.changeMode('stream').changeHash('q=1').stats(); });
			
			if(t.$searchPhoto){
				var $label = $.one('> label', t.$searchInput.parentNode);
				
				t.$searchInput.addEvent('focus', function(){  $label.addCss('hidden'); }).addEvent('blur', function(){ !this.value && $label.removeCss('hidden'); });
				t.$searchPhoto.addEvent('submit', function(ev){
					ev.preventDefault();
					var q = this['q'].value;
					q && t.changeMode('search', q).changeHash('s=' + q + '&q=1').stats();
				});
				t.$viewPhoto.addEvent('click', function(ev){ ev.preventDefault(); t.changeMode('photo').changeHash('p=' + t.photoInfo[0].id).stats(); });
			}
		}
		
		var oHash = t.parseObj(window.location.hash);
		
		oHash.s && t.$searchPhoto ? t.changeMode('search', oHash.s) : oHash.q && t.$viewStream ? t.changeMode('stream', +oHash.q) : t.changeMode('photo', oHash.p);
	};
	
	Gallery.prototype = {
		showPhoto: function(p){
			var t = this,
				index = p && t.photoIndex[p] ? t.photoIndex[p] : 0,
				info = t.photoInfo[index],
				turn = t.turn(index);
			
			if(info.img != t.$photo.src){
				t.$photoLoading.removeCss('hidden');
				t.$photoIndex.attr('innerHTML', index + 1);
				t.$photo.src = info.aimg ? info.aimg : info.img;
				t.$photoDesc.attr('innerHTML', String.format('<h2>%1</h2>', info.title) + (info.desc && String.format('<p>%1</p>', info.desc)));
				t.$photoPrev.href = turn.prev;
				t.$photoNext.href = turn.next;
				t.bar.onStart = function(){
					t.$thumb.$('> li.nph_list_active').removeCss('nph_list_active');
					t.$thumbs.$(index).addCss('nph_list_active');
				}; 
				t.bar.scrollTo(info.pos);
				t.$viewOrig && (t.$viewOrig.href = info.img);
			}

			return t;
		},
		
		showStream: function(page){
			var t = this;
			
			page = isNaN(page) || page < 1 || page > t.total ? 1 : page;
			var params = {
					stream: t.photoInfo.slice(t.streamSize.size * (page - 1), t.streamSize.size * page),
					page: page,
					total: t.total
				};
			t.$stream.attr('innerHTML', $.ui.Template.parse('stream', params));
			t.$stream.$('> ul.nph_list_stream a').addEvent('click', function(ev){ 
				var oHash = t.parseObj(this.href);
				
				ev.preventDefault();
				
				t.changeMode('photo', oHash.p).changeHash('p=' + oHash.p).stats();
			});	
			t.$stream.$('> div.nph_pages > a').addEvent('click', function(ev){
				var oHash = t.parseObj(this.href);
				
				ev.preventDefault();
				
				t.showStream(+oHash.q).changeHash('q=' + oHash.q);
			});
			
			return t;
		},
		
		showSearch: function(s, page){
			s = s || '';
			page = isNaN(page) || page < 1 ? 1 : page;
			var t = this,
				channelid = t.channelid || '',
				size = t.streamSize.size,
				start = (page - 1) * size;
				
			$.ajax.importJs(
				String.format('http://uvs.youdao.com/search?site=photogalaxy.163.com&sort=time&q=%1&channelid=%2&length=%3&start=%4', encodeURIComponent(s), channelid, size, start),
				t.buildSearch.bind(t)
			);
			
			return t;
		},
		
		buildSearch: function(){
			var t = this, hs = t.$searchTheme.$('> h3'), $found = hs.$(0), $notfound = hs.$(1);
			
			if(!jsonres.availHits){
				$found.addCss('hidden');
				$notfound.removeCss('hidden');
				$.one('> span', $notfound).attr('innerHTML', String.format('"%1"', jsonres.q));
				t.$search.attr('innerHTML', '');
				return false;
			}
			$found.removeCss('hidden');
			$notfound.addCss('hidden');
			$.one('> span', $found).attr('innerHTML', String.format('"%1"', jsonres.q));
			$.one('> span.nph_search_count span', $found).attr('innerHTML', jsonres.availHits);
			
			var params = {
				q: jsonres.q,
				stream: jsonres.hits,
				page: Math.floor(jsonres.start / jsonres.length) + 1,
				total: Math.ceil(jsonres.availHits / jsonres.length)
			}
			
			t.$search.attr('innerHTML', $.ui.Template.parse('search', params));
			
			t.$search.$('> div.nph_pages > a').addEvent('click', function(ev){
				var oHash = t.parseObj(this.href);
				
				ev.preventDefault();
					
				t.showSearch(oHash.s, oHash.q).changeHash('s=' + oHash.s + '&q=' + oHash.q);
			});
		},
		
		changeMode: function(mode, value){
			var	t = this;
			
			if (mode == 'photo') {
				$([t.$modePhoto, t.$photoType, t.$setInfo, t.$galleryRelat]).removeCss('hidden');
				$([t.$modeStream, t.$streamType, t.$modeSearch, t.$searchTheme]).addCss('hidden');
				return t.showPhoto(value);
			}
			
			if (mode == 'stream') {
				$([t.$modeStream, t.$streamType, t.$setInfo, t.$galleryRelat]).removeCss('hidden');
				$([t.$modePhoto, t.$photoType, t.$modeSearch, t.$searchTheme]).addCss('hidden');
				return t.showStream(value);
			}
			
			if (mode == 'search') {
				$([t.$modeSearch, t.$searchTheme]).removeCss('hidden');
				$([t.$modePhoto, t.$modeStream, t.$setInfo, t.$galleryRelat]).addCss('hidden');
				return t.showSearch(value);
			}
		},
		
		resize: function($img, size){
			$img.removeAttribute('width');
      		$img.removeAttribute('height');
			size = size || {};
			
			var rw = size.width ? $img.width / size.width : 0,
				rh = size.height ? $img.height / size.height : 0;
				
			if(rw > 1 || rh > 1){
				rw > rh ? $img.width = size.width : $img.height = size.height;
			}
		},
		
		parseObj: function (hash) {
			var rhash = /[#&]([^&=]+)=([^&=]+)/ig,
				a = rhash.exec(hash),
				o = {};
			
			while (a) {
				o[a[1]] = a[2];
				a = rhash.exec(hash);
			}
			
			return o;
		},
		
		changeHash: function (hash) {
        	window.location.hash = hash;
			
			return this;
    	},
		
		stats: function(){
			'function' === typeof vjEventTrack && vjEventTrack();
        	'function' === typeof neteaseTracker && neteaseTracker();
		}
	}

	nph.Gallery = Gallery;
})(window);