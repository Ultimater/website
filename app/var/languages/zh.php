<?php

    /**
     * Need to keep this as array() vs. [] for Transilex
     */
    $messages = array(
        'language_text'                   => 'English',
        'download'                        => '下载',
        'documentation'                   => '文档',
        'forum'                           => '论坛',
        'blog'                            => '博客',
        'support'                         => '支持',
        'donate'                          => '捐助',
        'store'                           => '应用中心',
        'github'                          => 'GitHub',
        'phalcon_description'             => "<strong>Phalcon</strong>是一个用C语言写的Web开发框架，它具有<a href=':1:'>高性能</a>和低功耗等特点",
        'the_fastest'                     => '最快的',
        'php_framework'                   => 'PHP框架',
        'try_online'                      => '在线尝试',
        'see_screencasts'                 => '演示',
        'everything_you_need_upper'       => '您需要的一切都在这里',
        'full_mvc_applications'           => "完整的<a href=':1:'>MVC</a>应用",
        'single_module'                   => '单模块',
        'multi_module'                    => '多模块',
        'micro_applications'              => '微应用',
        'orm'                             => 'ORM',
        'transactions'                    => '事务',
        'behaviors'                       => 'Behaviors',
        'relations'                       => 'Relations',
        'phql'                            => 'PHQL',
        'events'                          => '事件',
        'validations'                     => '验证',
        'hydration'                       => 'Hydration',
        'logging'                         => '日志',
        'profiling'                       => 'Profiling',
        'sharding'                        => 'Sharding',
        'odm_for_mongo'                   => 'ODM for Mongo',
        'template_engine_volt'            => '模板引擎(Volt)',
        'di_ioc'                          => '依赖注入/反转控制',
        'events_management'               => '事件管理',
        'encryption'                      => '加密处理',
        'http_request'                    => 'HTTP请求',
        'http_response'                   => 'HTTP响应',
        'http_cookies'                    => 'Cookies',
        'escaping'                        => 'Escaping',
        'filtering'                       => '过滤器',
        'forms_builder'                   => '表单创建器',
        'forms_validation'                => '验证',
        'flash_messages'                  => 'Flash Messages',
        'cache'                           => '缓存',
        'pagination'                      => '分页',
        'annotations'                     => '注解',
        'security'                        => '安全',
        'translations'                    => '翻译',
        'assets_management'               => 'Assets Management',
        'universal_auto_loader'           => '通用自动加载',
        'cli'                             => 'CLI',
        'phalcon_forum_upper'             => 'PAHLCON论坛',
        'stack_overflow_upper'            => 'STACK OVERFLOW',
        'github_upper'                    => 'GITHUB',
        'email_us_upper'                  => 'EMAIL US',
        'services_upper'                  => '服务',
        'consulting_upper'                => '咨询',
        'requirements_analysis'           => '需求分析',
        'implementation'                  => '实施',
        'ongoing_support'                 => '持续支持',
        'read_more'                       => '阅读更多',
        'hosting_upper'                   => '主机/服务器',
        'phalcon_can_be_installed'        => 'Phalcon可以被安装在',
        'main_upper'                      => '主要',
        'consulting'                      => '咨询',
        'hosting'                         => '主机/服务器',
        'support_upper'                   => '支持',
        'forum_community'                 => '论坛/社区',
        'stack_overflow'                  => 'Stack Overflow',
        'issue_tracker'                   => 'Issue Tracker',
        'get_involved_upper'              => '参与',
        'team'                            => '团队',
        'about'                           => '关于',
        'roadmap'                         => '路线图',
        'donate_to_phalcon'               => '捐助Phalcon:',
        'or'                              => '或',
        'twitter'                         => 'Twitter',
        'facebook'                        => 'Facebook',
        'google_plus'                     => 'Google+',
        'vimeo'                           => 'Vimeo',

        'download_phalcon'                => '下载Phalcon',
        'download_linux'                  => 'Linux/Unix/Mac',
        'download_windows'                => 'Windows DLLs',
        'download_developer_tools'        => '开发工具',
        'download_ide_stubs'              => 'IDE stubs',
        'download_note'                   => 'Phalcon is a C extension, so you need to download a binary for your platform or compile it from source code.',
        'download_compilation'            => '编译',
        'download_compilation_1'          => 'Linux下，您可以很方便地使用源代码编译安装。',
        'download_requirements'           => '安装要求',
        'download_requirements_1'         => '我们需要提前安装一些库：',
        'download_requirements_2'         => 'PHP 5.x 开发工具包',
        'download_requirements_3'         => 'GCC 编译器',
        'download_compilation_11'         => '1. To create the extension from C source follow these steps:',
        'download_compilation_12'         => '2. 添加扩展到php.ini文件:',
        'download_compilation_13'         => '3. Finally, restart the webserver',
        'download_debian'                 => 'Debian',
        'download_debian_1'               => "<a href=':1:'>FortRabbit</a>在<a href=':2:'>这里</a>提供了一个repo",
        'download_debian_2'               => '包的名字是php5-phalcon',
        'download_arch'                   => 'Arch Linux',
        'download_arch_1'                 => "ArchLinux下有一个PKGBUILD , <a href=':1:'>点击这里</a>",
        'download_opensuse'               => 'OpenSUSE',
        'download_opensuse_1'             => "There is a package available <a href=':1:'>here</a> (thanks to <a href=':2:'>Mariusz Łączak</a>)",
        'download_freebsd'                => 'FreeBSD',
        'download_freebsd_1'              => 'A port is available for FreeBSD. You only need these few commands to install it:',
        'download_dependencies'           => '依赖',
        'download_dependencies_1'         => '尽管Phalcon并不直接关联到其他PHP扩展，但还是使用了一部分扩展用于提供其他功能。所使用的扩展如下:',
        'download_dependencies_2'         => '以上的扩展并不是必须的，您可以根据您的需求来安装必须的扩展。举例说，如果您需要使用MySQL，那么您只需要安装PDO 和 PDO/MySQL， 然后忽略Oracle, SQlite, Postgresql and Mongo。',
        'download_need_help'              => '需要帮助吗?',
        'download_need_help_1'            => "请查看我们的<a href=':1:'>支持页面</a> 以获取具体的支持方式。我们会尽我们所能去帮助您。",

        'download_windows_note'           => 'We highly recommend you use the latest version of PHP corresponding to our DLLs, so as to take advantage of the full feature set of Phalcon.',
        'download_windows_stable'         => '稳定/主要 版本',
        'download_windows_installation'   => '安装',
        'download_windows_installation_1' => "在Windows上安装Phalcon，您可以直接下载编译好的DLL。 编辑您的php.ini，添加到最后, 并重启Web服务器，以加载扩展。 <a href=':1:'>详细介绍</a>.",
        'download_windows_guides'         => '相关指南',
        'download_windows_guides_xampp'   => '在XAMPP下安装',
        'download_windows_guides_wamp'    => '在WAMP下安装',
        'download_windows_alpha'          => 'Alpha/Beta 版本',
        'download_source_code'            => "源代码: <a href=':1:' target='_download' title='GitHub Repo'>github</a>",
        'download_source_code_switch'     => "源代码 (请切换到相关分支): <a href=':1:' target='_download' title='GitHub Repo'>github</a>",
        'download_no_alpha_beta'          => '目前没有可用的alpha/beta版本',
        'download_windows_older'          => '旧版本',

        'download_devtools_1'             => '这些工具是一些有用的脚本，用于生成结构性的代码。 您应用的核心代码只需要用一句简单的命令即可生成， 让您更加方便地使用Phalcon去开发应用。',
        'download_devtools_docs'          => "文档: <a href=':1:'>Phalcon 开发工具</a>",
        'download_devtools_composer'      => '使用Composer安装',
        'download_devtools_composer_1'    => '安装composer到一个公用的位置或在您的项目里面:',
        'download_devtools_composer_2'    => '通过以下步骤创建composer.json文件:',
        'download_devtools_composer_3'    => '运行composer安装器:',
        'download_devtools_composer_4'    => '给phalcon.php创建symbolic link:',
        'download_devtools_download'      => '您可以在<a href=":1:">Github</a>下载或复制包含开发工具的跨平台包.',

        'consulting_header'               => "我们提供Phalcon咨询服务 <br /> 或 基于PHP的开发",
        'requirements_analysis_1'         => 'One of the biggest problems that developers face is the fact that a lot of projects do not have adequately defined requirements. Therefore, more often than not what the client wants is totally different from what the developer understands and subsequently delivers.',
        'requirements_analysis_2'         => '我们可以提供需求分析服务，参与客户讨论，并把他们的需求转换成详细的开发文档。',
        'implementation_1'                => '如果你想雇佣我们为您开发应用程序,我们将非常乐意。使用最新的技术,我们可以为您的任务或项目提供一个健壮的，经过完全测试的和有文档的解决方案。',
        'ongoing_support_1'               => '对于客户感兴趣的持续支持合同，我们可以持续为他们的项目提供基础支持。客户可以按小时购买技术支持(至少2小时)，每小时50美元。',
        'ongoing_support_2'               => '技术支持小时不会过期，并且可以在任何需要时使用。如果客户希望一个持续的技术支持方案，我们可以提供更加灵活的方案，更好的适合他们的需求。',
        'sponsors'                        => '赞助商',
        'sponsors_1'                      => '对那些希望赞助我们的工作和进一步发展Phalcon，我们可以提供多种适合任何预算的赞助选项。',
        'sponsors_2'                      => 'Additionally, customers might want certain features implemented that would normally take a lot longer to do so due to their popularity or complexity. We can certainly accommodate such requests at our normal rates.',
        'contact'                         => '联系',
        'contact_1'                       => "Feel free to <a href=':1:'>contact us</a> to discuss your requirements and allow us to offer a solution that would best fit your needs and your budget. No project is too big or too small.",

        'phalcon_team'                    => 'Phalcon团队',
        'team_andres_1'                   => 'Andres is no stranger to open source projects. In the last nine years, he has designed and released frameworks for PHP and has been involved in web development - his main passion.',
        'team_andres_2'                   => "A TR35 winner, Andres' main drive is to always choose and implement or use the right tool for the job, mostly focused on performance. Therefore in 2011 a new idea was in the works; to create a new kind of framework for PHP developers, one that focuses on usability, features and mostly performance.",
        'team_andres_3'                   => '因为这种新的想法，Phalcon诞生了。一个用C语言编写的PHP框架，在为开发人员提供丰富功能的同时，提供高性能，并且占用资源很低的框架',
        'team_andres_4'                   => 'Andres是该灵感的创造者和Phalcon的核心开发人员。',
        'team_nikos_1'                    => 'Nikos在IT行业已经超过20多年。在2000年，他就已经开始接触PHP，并在他个人和公司的项目中使用PHP。',
        'team_nikos_2'                    => '他喜欢发现新的技术和方法,将它们集成到现有的应用程序中，由此获得它们的好处。',
        'team_nikos_3'                    => 'He is an avid supporter of Test Driven Development (TDD) and always tries to get 100% coverage in his code.',
        'team_nikos_4'                    => "Nikos' continuing interest in new and innovative technologies breaking out of the norm introduced him to Phalcon. He joined the core team and his tasks mainly involve coordination of NFRs and bug fixes, help with tests, documentation and the incubator. Nikos is also responsible for maintaining the Windows DLLs for the project and offers support whenever possible.",
        'team_nikolay_1'                  => 'Nikolay开发Web应用程序已超过10年。他曾经参与过高性能和复杂网站的设计。',
        'team_nikolay_2'                  => 'Nikolay参与开源项目的工作已经很长一段时间了，每当有需要时就并尽可能利用开源项目。因此，他开始使用他的个人时间通过项目分支，提供底层结构和建议，以及性能优化等来回馈给社区。他一直积极地根据来自社会各界的反馈改进开源CMS项目。',
        'team_nikolay_3'                  => '他持续地参与开源项目和遵守回馈社区的心态已经帮助他提升了他的技术。',
        'team_nikolay_4'                  => 'Nikolay是一个Web应用程序性能最大化的狂热支持者。在他接触“Phalcon”后，他决定继续使用的这个项目，并成为它的传播者， 并努力向俄语社区和俄语开发人员提供资源。',
        'team_nikolay_5'                  => "他的贡献包含： 俄语镜像网站 (<a href=':1:'>http://www.phalconphp.ru</a>)， 俄语文档镜像 (<a href=':2:'>http://docs.phalconphp.ru</a>)， 持续改正和修改英文文档，Fackebook社区组织Vkontakte (<a href=':3:'>http://vk.com/phalconphp</a>)。",

        'get_involved'                    => '加入我们',
        'about_description_1'             => "Amazing projects need amazing hands. We might not know you just yet, but we think you'd be a great fit for building a better web. Together, we're ready to change the world! Here at Phalcon, we’re building a new generation framework for PHP; we want to give you an amazing performance while helping you develop in an easy and fun way.",
        'about_description_2'             => 'We hope that you enjoy Phalcon as much as we do. Our arms are always open to receive your collaboration on the many things a project like this requires:',
        'documentation_upper'             => '文档',
        'about_documentation_1'           => 'The repository of this website is available on github. Feel free to improve the redaction, fix typos, add examples, add articles, etc. Also, if you can translate some of the content to another language, it will be much appreciated!',
        'screencasts'                     => '示例',
        'about_screencasts_1'             => "We all love screencasts. If you have some extra time and want to support the community with some nice videos teaching any of the framework's features, it's very welcome. Check out our <a href=':1:'>Vimeo Channel</a> as a guide.",
        'tests'                           => '测试',
        'about_tests_1'                   => "No software is free of bugs. If you find any, please do not hesitate to tell us. We have a testsuite with more than <a href=':1:'>8000</a> tests. However, unit-tests are never enough. Help us improve our testsuite by adding more tests or improve the current ones. Every added test makes the framework more stable.",
        'sample_applications'             => '示例应用',
        'about_sample_apps_1'             => 'Big examples help others to better understand how big things can be created with Phalcon. Feel free to share repositories to sample applications helping others with their work and allow others to give you feedback about your work too!',
        'evangelism'                      => '传道者',
        'about_evangelism_1'              => "There are a lot of people who still don’t know that Phalcon exists or that it really works. We are certain that many developers will benefit from hearing what Phalcon is all about and how it can help them. If you know of any PHP events/meetings and you wish to give a talk about the project, you have our full support. Who wouldn't want to know about the tool that is revolutionizing PHP development?",
        'share_your_experiences'          => '分享您的经验',
        'about_share_experiences_1'       => "Don’t be shy, feel free to share the ways through which Phalcon was useful to you with the community. If Phalcon is a success case for you, let us share that with the community. Also, discuss what components needed extra work, what you could do easier, what benefits you got by using Phalcon. Although not everything can be implemented immediately, your input on new feature requests can greatly help us shape the future of the project. Your feedback helps us all.",
        'about_blog_1'                    => "If you like writing, remember that <a href=':1:'>our blog</a> is open to post tutorials created by you. If you have a blog of your own and have written something about Phalcon, we can also publish in our social network pages so as to achieve maximum visibility. If your blog post is in a language other than English, we want to share it and potentially translate it if possible. If you know about blogs related to PHP that are interested in presenting the project to its audience please let us know.",
        'donations_sponsoring'            => 'Donations / Sponsoring',
        'about_sponsoring_1'              => "We’re a tiny but effective core team of developers working our tails off. We try to spend as much time as possible on the project. All our passion for this project makes us want to be better every day. Phalcon is open-sourced software and volunteer efforts are needed for its constant evolution. You can help us keep the development active by donating to the project or sponsoring the development. More time and resources dedicated to the project means more activity, more improvement, better support, more amazing features, etc.",
        'social_networks'                 => '社交网络',
        'about_social_networks_1'         => "Phalcon is evolving on a daily basis, through our desire to make it better. Social networks are part of our lives now, and we all interact with others through them. Sharing your Phalcon experience with your social circles will greatly increase the visibility of the project. More and more people will engage in our community, thus making it more powerful, even more feature rich and popular. Like, '+1', share posts that we constantly post on every social network, engage in discussions regarding those posts. People who discover Phalcon through your interactions will thank you!",
        'about_social_networks_2'         => "We have a presence in most of the popular social networks. By following us, you are helping us increase the project's visibility:",
        'follow_on_twitter'               => 'Follow us on Twitter',
        'facebook_page'                   => 'Facebook Page',
        'google_plus_page'                => 'Google+ Page',
        'official_blog'                   => '官方博客',
        'star_on_github'                  => '在Github上，给项目加星标',
        'thank_you'                       => '谢谢您！',
        'about_thank_you_1'               => '我们想感谢推动Phalcon成为最佳框架的所有贡献者和社区成员。您的美言和参与是让我们做得更好的动力。我们希望，Phalcon满足并超越你们对它的信任。',
        'flying_with_phalcon'             => '谢谢和Phalcon一起放飞远行！ &lt;3',

        'hosting_description'             => 'Phalcon can be installed on any machine on which the hosting provider offers SSH root access (or sudo). Below is a list of reputable companies that offer such services:',
        'hosting_fortrabbit_1'            => 'Fortrabbit提供许多托管计划(有一个针对开发人员是免费的 - 但有一些限制)，可以满足大部分的开发人员的期望，可以用来尝试Phalcon或者部署他们的应用程序。',
        'hosting_fortrabbit_2'            => "他们提供各种<a href=':1:'>扩展</ A>，将可以满足即使是很苛刻的项目。",
        'hosting_fortrabbit_3'            => 'Phalcon的稳定版本已经预装，您可以通过控制面板激活他们。',
        'hosting_webfaction_1'            => 'WebFaction开发人员主机。拥有完全的shell权限，速度很快的服务器，所有您最喜爱的工具已经为您预先安装和维护。',
        'hosting_webfaction_2'            => "在WebFaction安装Phalcon , 请参见说明，在<a href=':1:'>这里</a>",
        'hosting_amazon_ec2_1'            => 'Amazon Elastic Compute Cloud提供可伸缩的，按需付费的云服务。',
        'hosting_amazon_ec2_2'            => "选择一个预算配置好的Amazon Machine Image (AMI) 并立即运行。 或者创建一个包含您应用，库，数据和相关配置的AMI。<a href=':1:'>参见更多</a>",
        'hosting_amazon_ec2_3'            => '按照常规安装说明安装Phalcon即可',
        'hosting_linode_1'                => "部署和管理您的Linode VPS. 选择一个Linux发行版，并选择服务器资源大小，数据中心然后购买，并运行。 <a href=':1:'>参见更多</a>",
        'hosting_linode_2'                => '按照常规安装说明安装Phalcon即可',
        'hosting_digital_ocean_1'         => "Blazing Fast Cloun Technology. 为开发人员构建. 部署一个SSD服务器只需55秒. <a href=':1:'>参见更多</a>",
        'hosting_digital_ocean_2'         => '按照常规安装说明安装Phalcon即可',
        'hosting_rackspace_1'             => "云服务是一些运行Linux或Windows&reg;的虚拟机，在Rackspace Cloud上的服务器. 您可以根据需要扩展CPU, 内存, 和存储空间。 最重要的是，您可以按需付费. <a href=':1:'>参见更多</a>",
        'hosting_rackspace_2'             => '按照常规安装说明安装Phalcon即可',





    );

    // return $messages;