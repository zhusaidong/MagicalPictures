QQ空间的神奇图片
Magical Pictures Of QQ Zone
	很多年前的qq空间，流传这一张很神奇的图片，
	转载到自己空间会显示自己所在城市天气预报、客户端信息(浏览器、操作系统、IP所在地之类)、随机笑话等等
	当年还没有入程序员坑，确实觉得很神奇
	如今已入坑，随手写了一波
	
配置rewrite
	nginx 需配置nginx.conf
		rewrite MagicalPictures.png MagicalPictures.php;
	apache 无需再配置，项目中已有.htaccess文件
