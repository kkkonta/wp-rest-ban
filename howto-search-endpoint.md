# which plugin uses WP API?

## use JQ

### jq install sample

brew install jq

### how to WP API search

#### curl http://ドメイン/wp-json | jq .routes | jq keys

#### ↓

##### "/contact-form-7/v1",
##### "/contact-form-7/v1/contact-forms",
##### "/contact-form-7/v1/contact-forms/(?P<id>\\d+)",
##### "/contact-form-7/v1/contact-forms/(?P<id>\\d+)/feedback",
##### "/contact-form-7/v1/contact-forms/(?P<id>\\d+)/refill",
#####"/jetpack/v4",
##### ...

### WP APIのエンドポイントが一覧で見れる。

### plugin_name/version(bogo/v1)
### というエンドポイントにリクエストを出す　→　そのプラグインが追加したAPIにどんなリクエストを投げることができるかが確認可能。
