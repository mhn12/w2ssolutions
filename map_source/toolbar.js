(function ($, undefined) {
	var panelId = 0;
	var toolbarInitialized = false;
	
	var shells;
	var originalPadding = 0;
	
	var toolbar;
	var panels = new Array();
	var panelsWrap;
	var activePanel = 0;
	var form;
	var target;
	var mapurl;
	
	function Form(root) {
		this.el = $(root);
		this.values = new Array();
		this.refresh();
	}
	Form.prototype.refresh = function() {
		var root = this;
		this.el.find('input[type=text]').each(function() {
			root.values[$(this).attr('id')] = $(this).val();
		});
		this.el.find('textarea').each(function() {
			root.values[$(this).attr('id')] = $(this).val();
		});
		this.el.find('input[type=checkbox]').each(function() {
			if ($(this).attr('checked') == 'checked') {
				root.values[$(this).attr('id')] = true;
			} else {
				root.values[$(this).attr('id')] = false;
			}
		});
		this.el.find('select').each(function() {
			root.values[$(this).attr('id')] = $(this).val();
		});
	}
	
	function Panel(name, width) {
		this.width = width;
		this.name = name;
		this.id = this.name + '-panel';
		this.el = $('#' + this.id);
		this.button = $('#' + this.name);
		
		this.el.css({ "width" : this.width });
	}
	
	//Panel.prototype.show_panel = function() {
//		toolbar.css({ "width" : this.width });
//		panelsWrap.css({ "width" : this.width });
//		shells.css({ "margin-left" : originalPadding + this.width/2 });
//		if (activePanel != 0) {
//			panels[activePanel].hide_panel();
//		}
//		this.el.show();
//		activePanel = this.name;
//		
//		$('.toolbar .button.active').removeClass('active');
//		this.button.addClass('active');
//	}
	//Panel.prototype.hide_panel = function() {
//		this.el.hide();
//		this.button.removeClass('active');
//		activePanel = 0;
//	}
	
	$(document).ready(function() {
		init();
		//$('.toolbar .button').on('click', show_panel);
		//$(document).on('click', hide_panels);
		//$('#refresh').on('click', refresh);
		//$(window).on('resize', hide_responsive);
	});
	
	function init() {
		mapurl = $('.demo-box').find('img').attr('src');
		$('.demo-box').find('img').remove();
		
		target = $('#rockstar-map');
		shells = $('.pagewrap');
		toolbar = $('.toolbar');
		panelsWrap = $('#panels-wrap');
		panels['settings'] = new Panel('settings', 300);
		panels['video'] = new Panel('video', 760);
		
		form = new Form($('#settings-panel form'));
		
		$('#rockstar-map').rmap({
			height : 400,
			image : {
				src : mapurl
			}
		});
	}
	
	//function update_slider() {
//		$(this).prev().html($(this).slider("option", "value"));
//	}
	//function get_html() {
		//var html = '';
		
		//html += '<div id="rockstar-map">';
//		html += '	<div class="location" id="loc-0" data-title="Los Angeles" data-x="404" data-y="663">                                                                           ';
//		html += '		<h1>Los Angeles</h1>                                                                                                                                    ';
//		html += '		<h2>USA</h2>                                                                                                                                                ';
//		html += '		<p class="address">13 Random Str. 9000<br />Second line address</p>                                                                                          ';
//		html += '		<p class="phone">+359 876 122011<br />+359 882 109953<br />+359 872 121010</p>                                                                              ';
//		html += '		<p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>          ';
//		html += '	</div>                                                                                                                                                          ';
//		html += '	<div class="location" id="loc-1" data-title="New Orleans" data-x="516" data-y="690">                                                                            ';
//		html += '		<h1>New Orleans</h1>                                                                                                                                        ';
//		html += '		<h2>USA</h2>                                                                                                                                               ';
//		html += '		<p class="address">13 Random Str. 9000<br />Second line address</p>                                                                                     ';
//		html += '		<p class="phone">+359 876 122011<br />+359 882 109953<br />+359 872 121010</p>                                                                             ';
//		html += '		<p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>            ';
//		html += '	</div>                                                                                                                                                             ';
//        html += '                                                                                                                                                                      ';
//		html += '	<div class="location" id="loc-3" data-title="New York" data-x="610" data-y="622">                                                                                  ';
//		html += '		<h1>New York</h1>                                                                                                                                              ';
//		html += '		<h2>USA</h2>                                                                                                                                                   ';
//		html += '		<p class="address">13 Random Str. 9000<br />Second line address</p>                                                                                            ';
//		html += '		<p class="phone">+359 876 122011<br />+359 882 109953<br />+359 872 121010</p>                                                                                 ';
//		html += '		<p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>            ';
//		html += '	<div class="location" id="loc-4" data-title="Mexico City" data-x="468" data-y="756">                                                                               ';
//		html += '		<h1>Mexico City</h1>                                                                                                                                           ';
//		html += '		<h2>Mexico</h2>                                                                                                                                                ';
//		html += '		<p class="address">13 Random Str. 9000<br />Second line address</p>                                                                                            ';
//		html += '		<p class="phone">+359 876 122011<br />+359 882 109953<br />+359 872 121010</p>                                                                                 ';
//		html += '		<p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>            ';
//		html += '	</div>                                                                                                                                                             ';
//		html += '	<div class="location" id="loc-5" data-title="Rio de Janeiro" data-x="728" data-y="1004">                                                                           ';
//		html += '		<h1>Rio de Janeiro</h1>                                                                                                                                        ';
//		html += '		<h2>Brazil</h2>                                                                                                                                                ';
//		html += '		<p class="address">13 Random Str. 9000<br />Second line address</p>                                                                                            ';
//		html += '		<p class="phone">+359 876 122011<br />+359 882 109953<br />+359 872 121010</p>                                                                                 ';
//		html += '		<p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>            ';
//		html += '	</div>                                                                                                                                                             ';
//		html += '	<div class="location" id="loc-7" data-title="Paris" data-x="935" data-y="579">                                                                                     ';
//		html += '		<h1>Paris</h1>                                                                                                                                                 ';
//		html += '		<h2>France</h2>                                                                                                                                                ';
//		html += '		<p class="address">13 Random Str. 9000<br />Second line address</p>                                                                                            ';
//		html += '		<p class="phone">+359 876 122011<br />+359 882 109953<br />+359 872 121010</p>                                                                                 ';
//		html += '		<p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>            ';
//		html += '	</div>                                                                                                                                                             ';
//		html += '	<div class="location" id="loc-8" data-title="Moscow" data-x="1066" data-y="550">                                                                                   ';
//		html += '		<h1>Moscow</h1>                                                                                                                                                ';
//		html += '		<h2>Russia</h2>                                                                                                                                                ';
//		html += '		<p class="address">13 Random Str. 9000<br />Second line address</p>                                                                                            ';
//		html += '		<p class="phone">+359 876 122011<br />+359 882 109953<br />+359 872 121010</p>                                                                                 ';
//		html += '		<p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>            ';
//		html += '	</div>                                                                                                                                                             ';
//		html += '	<div class="location" id="loc-9" data-title="Beijing" data-x="1428" data-y="628">                                                                                  ';
//		html += '		<h1>Beijing</h1>                                                                                                                                               ';
//		html += '		<h2>China</h2>                                                                                                                                                 ';
//		html += '		<p class="address">13 Random Str. 9000<br />Second line address</p>                                                                                            ';
//		html += '		<p class="phone">+359 876 122011<br />+359 882 109953<br />+359 872 121010</p>                                                                                 ';
//		html += '		<p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>            ';
//		html += '	</div>                                                                                                                                                             ';
//		html += '	<div class="location" id="loc-10" data-title="Melbourne" data-x="1548" data-y="1095">                                                                              ';
//		html += '		<h1>Melbourne</h1>                                                                                                                                             ';
//		html += '		<h2>Australia</h2>                                                                                                                                             ';
//		html += '		<p class="address">13 Random Str. 9000<br />Second line address</p>                                                                                            ';
//		html += '		<p class="phone">+359 876 122011<br />+359 882 109953<br />+359 872 121010</p>                                                                                 ';
//		html += '		<p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>            ';
//		html += '	</div>                                                                                                                                                             ';
//		html += '	<div class="location" id="loc-11" data-title="Istanbul" data-x="1044" data-y="622">                                                                                ';
//		html += '		<h1>Istanbul</h1>                                                                                                                                              ';
//		html += '		<h2>Turkey</h2>                                                                                                                                                ';
//		html += '		<p class="address">13 Random Str. 9000<br />Second line address</p>                                                                                            ';
//		html += '		<p class="phone">+359 876 122011<br />+359 882 109953<br />+359 872 121010</p>                                                                                 ';
//		html += '		<p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>            ';
//		html += '	</div>                                                                                                                                                             ';
//		html += '</div>                                                                                                                                                                ';
		
		//return html;
//	}
	//function call_plugin() {
//		$('#rockstar-map').rmap({
//			width : form.values['width'],
//			height : form.values['height'],
//			image : {
//				src : mapurl
//			},
//			nav_ui : {
//				show : form.values['show_ui'],
//				autohide : form.values['autohide'],
//				move_ui : form.values['move_ui'],
//				zoom_ui : form.values['zoom_ui']
//			},
//			menu : {
//				show : form.values['show_menu']
//			},
//			animations : {
//				move : form.values['move_anim'],
//				inertia : form.values['inertia']
//			},
//			zoom : {
//				initial : form.values['zoom_init'],
//				max : form.values['zoom_max']
//			},
//			fullscreen : {
//				enabled : form.values['fullscreen'],
//				start_in_fullscreen : form.values['start_in_fullscreen']
//			}
//		});
//	}
	
	// EVENT HANDLERS
	//function show_panel() {
//		panels[$(this).attr('id')].show_panel();
//		
//		if (!toolbarInitialized) {
//			toolbarInitialized = true;
//			toolbar.removeClass('init');
//		}
//	}
//	function hide_panels(e) {
//		if ($(e.target).closest('.toolbar').length == 0) {
//			toolbar.css({ "width" : 0 });
//			shells.css({ "margin-left" : originalPadding });
//			$('.button.active').removeClass('active');
//		}
//	}
	//function refresh() {
//		form.refresh();
//		
//		$('.demo-box').html(get_html());
//		call_plugin();
//	}
//	function hide_responsive() {
//		$('.responsive').css({ opacity : 0 });
//	}

}(jQuery));