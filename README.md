ganwu-link v0.1
1，数据库配置文件是/admin/user.php
2，数据库有两个表，需要自己创建，手动设置。

user表:
	id [int(12) 主键，自增]
	name [varchar(16)]
	password [varchar(16)]
	date [int(11)]
	
useradd表：
	id [int(12) 主键，自增]
	date [int(11)]
	linkname[varchar(25)]
	link[varchar(200)]
	image[varchar(50)]
	user[varchar(16)]
	

	
本站点处于0.1版本。待完善内容有如下：

1，用户名密码未加密，请尽量不要用常用的用户名密码注册。
2，不能修改或删除已经添加的站点
3，仅适配PC端，移动端适配未完成，使用起来界面或许不太友好。
4，暂时不可以自定义站点logo图标。
5，暂时没有退出登录功能。
6，添加网址必须带上http或https，暂时是这样。
7，需要使用未登录的默认站点，请访问index-bak.php这个文件。
8，后期代码开源并有视屏教程，大神勿喷。