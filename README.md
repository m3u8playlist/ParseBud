# ParseBud

ParseBud是一个未上架app store的app,用来观看youtube视频,使用者需要自签app
使用本app需要很强的动手能力和计算机知识,小白用户请略过,个人精力有限,不提供技术支持

| ![](https://raw.githubusercontent.com/m3u8playlist/ParseBud/main/1.jpg) | ![](https://raw.githubusercontent.com/m3u8playlist/ParseBud/main/2.jpg) |![](https://raw.githubusercontent.com/m3u8playlist/ParseBud/main/3.jpg) | ![](https://raw.githubusercontent.com/m3u8playlist/ParseBud/main/4.jpg) | ![](https://raw.githubusercontent.com/m3u8playlist/ParseBud/main/5.jpg) |


## app特色

1. 观看YouTube 720P视频
2. 后台播放
3. 可解析yt-dlp所支持的任何网站
4. 没有广告
5. 视频封面大部分是高清图片

## 安全前你需要准备的

1. 一台vps
2. 一个google账号
3. 自签软件


## 安装步骤

### 安装yt-dlp

1. vps上搭建php网站环境,推荐宝塔面板se
2. 将index.php 放到网站目录下,记得更改源码里的用户名和密码
3. php要允许shell_exec函数运行
4. vps安装 https://github.com/yt-dlp/yt-dlp

### 申请 youtube api

请自行搜索申请教程

### 安装ipa文件到iPhone

推荐使用altserver
https://altstore.io/

## 安装完成后设置app
1. 设置服务器
2. 设置youtube api
3. 更新youtube规则,然后点击保存配置按钮


## 注意实现
最高在vps上同时部署梯子,因为解析是在vps上进行的,有些网站解析出来的真实视频URL会和ip绑定,导致iPhone播放时的ip和解析时的ip不一致而播放失败,比如P站
将相关网站放到梯子app的规则里,走vps代理


## 想加而又遥遥无期的功能

播放youtube 4K视频时增加音轨,能力有限,暂时无法在播放视频的同时增加一条音轨

