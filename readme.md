# l5-blog

基于Laravel5.3的后台权限管理系统，前端博客项目。等后台权限做完后再分离一个代码仓库。

# 用到的知识点

> 将用到的知识点总结出来

**2016-10-13**
* 去掉 laravel generator、laravel datatables 扩展(虽然生成代码方便，但不是自己想要的风格。代码太重)
* 添加 [l5-repository](https://packagist.org/packages/prettus/l5-repository) 扩展

**2016-10-12**
* 添加Laravel 5.3权限管理包([https://github.com/spatie/laravel-permission](https://github.com/spatie/laravel-permission))

**2016-09-09**
* laravel generator 扩展
* laravel datatables 扩展


**2016-09-06**

* 自定义Middleware
* 后台登录验证码包的使用
* 重写后台登录方法，增加验证码校验
* 多语言


**2016-09-05**

* factory数据工厂使用
* 多用户表登录(前端后端登录分开)
* 自定义用户登录字段
