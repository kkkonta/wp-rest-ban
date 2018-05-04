# wp-rest-ban　使用するプラグインに応じてRESTを有効化。

## howto use

## request参考↓　必要に応じて適用します。

* /oembed/1.0
* /oembed/1.0/embed
 
* /wp/v2
* /wp/v2/posts
* /wp/v2/posts/(?P<id>[\d]+)
* /wp/v2/posts/(?P<parent>[\d]+)/revisions
* /wp/v2/posts/(?P<parent>[\d]+)/revisions/(?P<id>[\d]+)
* /wp/v2/pages
* /wp/v2/pages/(?P<id>[\d]+)
* /wp/v2/pages/(?P<parent>[\d]+)/revisions
* /wp/v2/pages/(?P<parent>[\d]+)/revisions/(?P<id>[\d]+)
* /wp/v2/media
* /wp/v2/media/(?P<id>[\d]+)
* /wp/v2/types
* /wp/v2/types/(?P<type>[\w-]+)
* /wp/v2/statuses
* /wp/v2/statuses/(?P<status>[\w-]+)
* /wp/v2/taxonomies
* /wp/v2/taxonomies/(?P<taxonomy>[\w-]+)
* /wp/v2/categories
* /wp/v2/categories/(?P<id>[\d]+)
* /wp/v2/tags
* /wp/v2/tags/(?P<id>[\d]+)
* /wp/v2/users
* /wp/v2/users/(?P<id>[\d]+)
* /wp/v2/users/me
* /wp/v2/comments
* /wp/v2/comments/(?P<id>[\d]+)
* /wp/v2/settings

## Jetpack を利用する場合↓
* /jetpack/v4
* /jetpack/v4/connection
* /jetpack/v4/connection/url
* /jetpack/v4/connection/data
* /jetpack/v4/connection/user
* /jetpack/v4/site
* /jetpack/v4/identity-crisis/confirm-safe-mode
* /jetpack/v4/identity-crisis/start-fresh
* /jetpack/v4/identity-crisis/migrate
* /jetpack/v4/module/all
* /jetpack/v4/module/all/active
* /jetpack/v4/module/(?P<slug>[a-z\-]+)
* /jetpack/v4/module/(?P<slug>[a-z\-]+)/active
* /jetpack/v4/module/(?P<slug>[a-z\-]+)/data
* /jetpack/v4/settings
* /jetpack/v4/settings/(?P<slug>[a-z\-]+)
* /jetpack/v4/options/(?P<options>[a-z\-]+)
* /jetpack/v4/jumpstart
* /jetpack/v4/updates/plugins
* /jetpack/v4/notice/(?P<notice>[a-z\-_]+)
* /jetpack/v4/plugins
* /jetpack/v4/plugin/(?P<plugin>[a-z\/\.\-_]+)

## Contact Form 7〃
* /contact-form-7/v1
* /contact-form-7/v1/contact-forms
* /contact-form-7/v1/contact-forms/(?P<id>\d+)
  
## ※テスト　→　http://ドメイン/wp-json/wp/v2/posts/?p=1
