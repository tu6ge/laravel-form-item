module.exports = {
    title: 'Laravel 表单域',
    description: '一个使用 Blade 组件创建的漂亮的 laravel 的表单域',
    base: process.env.NODE_ENV === 'production'  ? '/laravel-form-item/':'/',
    locales: {
        '/': {
            lang: 'zh-CN', // 将会被设置为 <html> 的 lang 属性
            title: 'Laravel 表单域',
            description: '一个使用 Blade 组件创建的健壮的表单域扩展'
        },
        '/en/': {
            lang: 'en-US',
            title: 'Laravel Form Item',
            description: 'This is a stronger Form Item plugin of laravel,build by Blade component'
        }
    },
    themeConfig: {
        repo:'tu6ge/laravel-form-item',
        docsDir: 'docs',
        editLinks: true,
        locales: {
            '/': {
                // 多语言下拉菜单的标题
                selectText: '选择语言',
                // 该语言在下拉菜单中的标签
                label: '简体中文',
                ariaLabel: '选择语言',
                editLinkText: '帮助我们完善此页',
                // Service Worker 的配置
                serviceWorker: {
                    updatePopup: {
                        message: "发现新内容可用.",
                        buttonText: "刷新"
                    }
                },
                // 当前 locale 的 algolia docsearch 选项
                algolia: {},
                nav: [
                    { text: '介绍', link: '/guide/', ariaLabel: '介绍' }
                ],

                sidebar: [
                    {
                        title: '指南',   // 必要的
                        //sidebarDepth: 1,    // 可选的, 默认值是 1
                        children: [
                            '/guide/',
                            '/guide/getting-started',
                        ]
                    },
                    {
                        title: '基础用法',   // 必要的
                        //sidebarDepth: 1,    // 可选的, 默认值是 1
                        children: [
                            '/form/',
                            '/form/text',
                            '/form/number',
                            '/form/switcher',
                            '/form/slider',
                            '/form/radio',
                            '/form/checkbox',
                            '/form/select',
                            '/form/cascader',
                            '/form/time',
                            '/form/date-picker',
                        ]
                    },
                    {
                        title: '高级用法',   // 必要的
                        //sidebarDepth: 1,    // 可选的, 默认值是 1
                        children: [
                            '/advanced/',
                            '/advanced/text',
                            '/advanced/number',
                            '/advanced/switcher',
                            '/advanced/slider',
                            '/advanced/radio',
                            '/advanced/checkbox',
                            '/advanced/select',
                            '/advanced/cascader',
                            '/advanced/time',
                            '/advanced/date-picker',
                        ]
                    },
                ]
            },
            '/en/': {
                selectText: 'Languages',
                label: 'English',
                ariaLabel: 'Languages',
                editLinkText: 'Edit this page on GitHub',
                serviceWorker: {
                    updatePopup: {
                        message: "New content is available.",
                        buttonText: "Refresh"
                    }
                },
                algolia: {},
                nav: [
                    { text: 'Guide', link: '/en/guide/', ariaLabel: 'Guide' }
                ],
                // sidebar: {
                //     '/en/': [/* ... */],
                //     '/en/guide/': [/* ... */]
                // }
            }
        }
    }
};

