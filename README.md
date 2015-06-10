Yii2 Site Analytics
===================
site analytics include baidu,51la,cnzz,google

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist rogeecn/yii2-site-analytics "*"
```

or add

```
"rogeecn/yii2-site-analytics": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
//Google
\Rogee\Type\Google::widget(['id'=>'xxx']);

//51la
\Rogee\Type\WuYiLa::widget(['id'=>'xxx']);

//cnzz
\Rogee\Type\Cnzz::widget(['id'=>'xxx']);

//baidy lazyload
\Rogee\Type\Baidu::widget(['id'=>'xxx', 'lazyload'=>true]);

//baidu normal load
\Rogee\Type\Baidu::widget(['id'=>'xxx']);
```

How to get analystics ID
-------

## BAIDU

### layzyload
123123 is id
```js
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?123123";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();
```

### normal
123123 is id
```js
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F123123' type='text/javascript'%3E%3C/script%3E"));
```

## CNZZ
5945233 is id
```js
<script src="http://s11.cnzz.com/stat.php?id=5945233&web_id=5945233" language="JavaScript"></script>
```

## 51la
123123123 is id
```js
http://js.users.51.la/123123123.js
```