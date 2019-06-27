(function() {
    tinymce.PluginManager.add('my_mce_button', function(editor, url) {
        editor.addButton('my_mce_button', {
            text: '',
            icon: 'Moderna',
            type: 'menubutton',
            menu: [{
                    text: 'submenu-1',
                    menu: [{
                            text: 'Sub Item 1',

                            onclick: function() {
                                editor.windowManager.open({
                                    title: 'Insert Random Shortcode',
                                    body: [{
                                            type: 'textbox',
                                            name: 'buttontext',
                                            label: 'Button text',

                                        },
                                        {
                                            type: 'textbox',
                                            name: 'buttonlink',
                                            label: 'button link',

                                        },
                                        {
                                            type: 'textbox',
                                            name: 'btnColor',
                                            label: 'button color',

                                        },
                                        {
                                            type: 'textbox',
                                            name: 'priceValue',
                                            label: 'Price',

                                        },
                                    ],
                                    onsubmit: function(e) {
                                        editor.insertContent('[button link="' + e.data.buttonlink + '" text="' + e.data.buttontext + '" color="' + e.data.btnColor + '" text="' + e.data.priceValue + '"]');
                                    }
                                });
                            }
                        },
                        {
                            text: 'Sub Item 2',
                            onclick: function() {
                                editor.insertContent('WPExplorer.com is awesome!');
                            }
                        }
                    ]

                },
                {
                    text: 'submenu-2',
                    menu: [{
                            text: 'Submenu-3',
                        },
                        {
                            text: 'submenu-4',

                            onclick: function() {
                                editor.windowManager.open({
                                    title: 'Insert Random Shortcode',
                                    body: [{
                                            type: 'textbox',
                                            name: 'textboxName',
                                            label: 'Text Box',
                                            value: '30'
                                        },
                                        {
                                            type: 'textbox',
                                            name: 'multilineName',
                                            label: 'Multiline Text Box',
                                            value: 'You can say a lot of stuff in here',
                                            multiline: true,
                                            minWidth: 300,
                                            minHeight: 100
                                        },
                                        {
                                            type: 'listbox',
                                            name: 'listboxName',
                                            label: 'List Box',
                                            'values': [{
                                                    text: 'Option 1',
                                                    value: '1'
                                                },
                                                {
                                                    text: 'Option 2',
                                                    value: '2'
                                                },
                                                {
                                                    text: 'Option 3',
                                                    value: '3'
                                                }
                                            ]
                                        }
                                    ],
                                    onsubmit: function(e) {
                                        editor.insertContent('[random_shortcode textbox="' + e.data.textboxName + '" multiline="' + e.data.multilineName + '" listbox="' + e.data.listboxName + '"]');
                                    }
                                });
                            }
                        }

                    ]
                }

            ]

        });
    });
})();