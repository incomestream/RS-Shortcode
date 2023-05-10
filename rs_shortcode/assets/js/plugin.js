(function() {		
   tinymce.create('tinymce.plugins.ZZP_Shortcodes', {
	  ZZP_Shortcodes: function(editor, url) {
	  	editor.addButton( 'zps_button', {
            title: 'ZP Shortcodes',
            type: 'menubutton',
            icon: 'icon zp_shortcode_icon',
            menu: [
  				{ // Accordion Shortcode
					text: zps_shortcode_label.accordion.menu,
                    onclick: function() {
                        editor.windowManager.open( {
                            title: zps_shortcode_label.accordion.header_title,
							minWidth: 500,
							height: 400,
							popup_css: false,
							scrollbars: true,
                            body: [
							{
								type: 'textbox',
								minWidth: 310,
                                name: 'title1',
                                label: zps_shortcode_label.accordion.content.title1.label,
								tooltip: zps_shortcode_label.accordion.content.title1.tooltip,						
							},
							{
								type: 'listbox',
								minWidth: 310,
                                name: 'active',
                                label: zps_shortcode_label.accordion.content.active.label,
								tooltip: zps_shortcode_label.accordion.content.active.tooltip,
								'values': [
                                    {text: zps_shortcode_label.accordion.content.active.values[0], value: 'false'},
                                    {text: zps_shortcode_label.accordion.content.active.values[1], value: 'true'},						
                                ]					
							},
							{
								type: 'textbox',
								multiline: true,
								minHeight: 100,
								minWidth: 310,
                                name: 'content1',
                                label: zps_shortcode_label.accordion.content.content1.label,
								tooltip: zps_shortcode_label.accordion.content.content1.tooltip,						
							},
							],
                            onsubmit: function( e ) {
								editor.insertContent( '[accordion_wrap][accordion_item title="'+e.data.title1+'" active="'+e.data.active+'"]'+e.data.content1+'[/accordion][/accordion_wrap]');
                            }
                        });
                    }	
				},
				{ // Blog Shortcode
					text: zps_shortcode_label.blog.menu,
                    onclick: function() {
                        editor.windowManager.open( {
                            title: zps_shortcode_label.blog.header_title,
							minWidth: 500,
							popup_css: false,
							scrollbars: true,
                            body: [
							{
								type: 'listbox',
								minWidth: 310,
                                name: 'columns',
                                label: zps_shortcode_label.blog.content.columns.label,
								tooltip: zps_shortcode_label.blog.content.columns.tooltip,
								'values': [
                                    {text: zps_shortcode_label.blog.content.columns.values[0], value: '2'},
                                    {text: zps_shortcode_label.blog.content.columns.values[1], value: '3'},
									{text: zps_shortcode_label.blog.content.columns.values[2], value: '4'},
                                ]					
							},
							{
								type: 'textbox',
								minWidth: 310,
                                name: 'items',
                                label: zps_shortcode_label.blog.content.items.label,
								tooltip: zps_shortcode_label.blog.content.items.tooltip,						
							},
							{
								type: 'textbox',
								minWidth: 310,
                                name: 'category',
                                label: zps_shortcode_label.blog.content.category.label,
								tooltip: zps_shortcode_label.blog.content.category.tooltip,						
							},
							{
								type: 'textbox',
								minWidth: 310,
                                name: 'exclude_ids',
                                label: zps_shortcode_label.blog.content.exclude_ids.label,
								tooltip: zps_shortcode_label.blog.content.exclude_ids.tooltip,						
							}
							],
                            onsubmit: function( e ) {
								editor.insertContent( '[zpblog columns="'+e.data.columns+'" items="'+e.data.items+'" category="'+e.data.category+'" exclude_ids="'+e.data.exclude_ids+'" ][/zpblog]');
                            }
                        });
                    }	
				},
				{ // Buttons
					text: zps_shortcode_label.buttons.menu,
                    onclick: function() {
                        editor.windowManager.open( {
                            title: zps_shortcode_label.buttons.header_title,
							minWidth: 500,
							popup_css: false,
							scrollbars: true,
                            body: [
							{
								type: 'textbox',
								minWidth: 310,
                                name: 'button_link',
                                label: zps_shortcode_label.buttons.content.button_link.label,
								tooltip: zps_shortcode_label.buttons.content.button_link.tooltip,						
							},
							{
								type: 'textbox',
								minWidth: 310,
                                name: 'button_target',
                                label: zps_shortcode_label.buttons.content.button_target.label,
								tooltip: zps_shortcode_label.buttons.content.button_target.tooltip,						
							},
							{
								type: 'textbox',
								minWidth: 310,
                                name: 'button_label',
                                label: zps_shortcode_label.buttons.content.button_label.label,
								tooltip: zps_shortcode_label.buttons.content.button_label.tooltip,						
							}
							],
                            onsubmit: function( e ) {
								editor.insertContent( '[button class="" link="'+e.data.button_link+'" target="'+e.data.button_target+'" ]'+e.data.button_label+'[/button]');
                            }
                        });
                    }	
				},
				{ // Client Carousel
					text: zps_shortcode_label.client_carousel.menu,
                    onclick: function() {
                        editor.windowManager.open( {
                            title: zps_shortcode_label.client_carousel.header_title,
							minWidth: 500,
							popup_css: false,
							scrollbars: true,
                            body: [
							{
								type: 'textbox',
								minWidth: 310,
                                name: 'name',
                                label: zps_shortcode_label.client_carousel.content.name.label,
								tooltip: zps_shortcode_label.client_carousel.content.name.tooltip,						
							},
							/*{
								type: 'textbox',
								minWidth: 310,
                                name: 'items',
                                label: zps_shortcode_label.client_carousel.content.items.label,
								tooltip: zps_shortcode_label.client_carousel.content.items.tooltip,						
							},*/
							{
								type: 'listbox',
								minWidth: 310,
                                name: 'autoplay',
                                label: zps_shortcode_label.client_carousel.content.autoplay.label,
								tooltip: zps_shortcode_label.client_carousel.content.autoplay.tooltip,
								'values': [
                                    {text: zps_shortcode_label.client_carousel.content.autoplay.values[0], value: 'false'},
                                    {text: zps_shortcode_label.client_carousel.content.autoplay.values[1], value: 'true'},						
                                ]						
							}
							],
                            onsubmit: function( e ) {								
								editor.insertContent( '[client_carousel name="'+e.data.name+'" autoplay="'+e.data.autoplay+'" ][client_item image="" link="" target="" ][/client_item][/client_carousel]');								
                            }
                        });
                    }	
				},
				{ // Columns
					text: zps_shortcode_label.columns.menu,
                    menu: [
                        {
                            text: zps_shortcode_label.columns.submenu.one_half,
                            onclick: function() {
								editor.insertContent( '[column_wrapper]<br>[one_half]CONTENT_HERE[/one_half]<br>[one_half]CONTENT_HERE[/one_half]<br>[/column_wrapper]');
							}       
                        },
                        {
                            text: zps_shortcode_label.columns.submenu.one_third,
                            onclick: function() {
								editor.insertContent( '[column_wrapper]<br>[one_third]CONTENT_HERE[/one_third]<br>[one_third]CONTENT_HERE[/one_third]<br>[one_third]CONTENT_HERE[/one_third]<br>[/column_wrapper]');
							}       
                        },
						{
                            text: zps_shortcode_label.columns.submenu.one_fourth,
                            onclick: function() {
								editor.insertContent( '[column_wrapper]<br>[one_fourth]CONTENT_HERE[/one_fourth]<br>[one_fourth]CONTENT_HERE[/one_fourth]<br>[one_fourth]CONTENT_HERE[/one_fourth]<br>[one_fourth]CONTENT_HERE[/one_fourth]<br>[/column_wrapper]');
							}       
                        }
                    ]
				},
				{ // Pricing Shortcode
					text: zps_shortcode_label.pricing.menu,
                    onclick: function() {                    
                        editor.insertContent( '[pricing_wrap][pricing title="Basic" desc="per month" price="$56" label="Sign Up" target="_self" link="#" column="3" best=""][/pricing][/pricing_wrap]');
                    }	
				},
				{ // Service
					text: zps_shortcode_label.services.menu,
                    onclick: function() {
                    	editor.insertContent( '[services_wrap][services columns="" align="" image="" title="" ] YOUR CONTENT HERE [/services][/services_wrap]');
                    }	
				},
				{
				// Tab Shortcode
					text: zps_shortcode_label.tab.menu,
                    onclick: function() {
                        editor.windowManager.open( {
                            title: zps_shortcode_label.tab.header_title,
							minWidth: 500,
							height: 400,
							popup_css: false,
							scrollbars: true,
                            body: [
							{
								type: 'textbox',
								minWidth: 310,
                                name: 'id1',
                                label: zps_shortcode_label.tab.content.id1.label,
								tooltip: zps_shortcode_label.tab.content.id1.tooltip,						
							},
							{
								type: 'textbox',
								minWidth: 310,
                                name: 'title1',
                                label: zps_shortcode_label.tab.content.title1.label,
								tooltip: zps_shortcode_label.tab.content.title1.tooltip,						
							},
							{
								type: 'textbox',
								multiline: true,
								minHeight: 100,
								minWidth: 310,
                                name: 'content1',
                                label: zps_shortcode_label.tab.content.content1.label,
								tooltip: zps_shortcode_label.tab.content.content1.tooltip,						
							},
							{
								type: 'textbox',
								minWidth: 310,
                                name: 'id2',
                                label: zps_shortcode_label.tab.content.id2.label,
								tooltip: zps_shortcode_label.tab.content.id2.tooltip,						
							},
							{
								type: 'textbox',
								minWidth: 310,
                                name: 'title2',
                                label: zps_shortcode_label.tab.content.title2.label,
								tooltip: zps_shortcode_label.tab.content.title2.tooltip,						
							},
							{
								type: 'textbox',
								multiline: true,
								minHeight: 100,
								minWidth: 310,
                                name: 'content2',
                                label: zps_shortcode_label.tab.content.content2.label,
								tooltip: zps_shortcode_label.tab.content.content2.tooltip,						
							},
							{
								type: 'textbox',
								minWidth: 310,
                                name: 'id3',
                                label: zps_shortcode_label.tab.content.id3.label,
								tooltip: zps_shortcode_label.tab.content.id3.tooltip,						
							},
							{
								type: 'textbox',
								minWidth: 310,
                                name: 'title3',
                                label: zps_shortcode_label.tab.content.title3.label,
								tooltip: zps_shortcode_label.tab.content.title3.tooltip,						
							},
							{
								type: 'textbox',
								multiline: true,
								minHeight: 100,
								minWidth: 310,
                                name: 'content3',
                                label: zps_shortcode_label.tab.content.content3.label,
								tooltip: zps_shortcode_label.tab.content.content3.tooltip,						
							},
							],
                            onsubmit: function( e ) {
								editor.insertContent( '[tab ids="'+e.data.id1+','+e.data.id2+','+e.data.id3+'" nav="'+e.data.title1+','+e.data.title2+','+e.data.title3+'"][tabpane id="'+e.data.id1+'"]'+e.data.content1+'[/tabpane][tabpane id="'+e.data.id2+'"]'+e.data.content2+'[/tabpane][tabpane id="'+e.data.id3+'"]'+e.data.content3+'[/tabpane][/tab]');
                            }
                        });
                    }	
				},
				{ // Team Shortcode
					text: zps_shortcode_label.team.menu,
                    onclick: function() {
                        editor.insertContent( '[team_wrap][team column="" title="" desc="" image="" link="" target="" ] YOUR CONTENT  [/team][/team_wrap]');
                    }	
				},
				{ // Testimonial Shortcode
					text: zps_shortcode_label.testimonial.menu,
                    onclick: function() {
						editor.insertContent( '[testimonial_wrap][testimonial_item author="" position="" title=""] YOUR CONTENT HERE [/testimonial_item][/testimonial_wrap]');
                    }	
				}
           ]
        });
	  }
});
// Register plugin using the add method
tinymce.PluginManager.add('zps_button', tinymce.plugins.ZZP_Shortcodes);
})();