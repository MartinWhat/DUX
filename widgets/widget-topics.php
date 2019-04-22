<?php

class widget_ui_topics extends WP_Widget
{
	public function widget_ui_topics()
	{
		$widget_ops = array('classname' => 'widget_ui_topics', 'description' => '显示主题广告(包括富媒体)');
		$this->WP_Widget('widget_ui_topics', '专题推荐', $widget_ops);
	}

	public function widget($args, $instance)
	{
		extract($args);
		$title = apply_filters('widget_name', $instance['title']);
		$code = $instance['code'];
		echo $before_widget;
		echo '<h3>' . $title . '<h3>';
		echo '<div class="item">' . $code . '</div>';
		echo $after_widget;
	}

	public function form($instance)
	{
		$defaults = array('title' => '专题推荐', 'code' => '<ul class="ebox">
	<li class="ebox-i ebox-01">
		<h4>闲言碎语</h4>
		<p>没错，就只是闲言碎语而已</p>
		<a class="btn btn-primary btn-sm" target="_blank" href="https://www.wenzika.com/">直达专题</a>
	</li>
	<li class="ebox-i ebox-02">
		<h4>Tips</h4>
		<p>各种IT相关小技巧收集整理</p>
		<a class="btn btn-primary btn-sm" target="_blank" href="https://www.wenzika.com/">直达专题</a>
	</li>
	<li class="ebox-i ebox-03">
		<h4>Linux</h4>
		<p>Linux系统及其周边常见问题全搜罗</p>
		<a class="btn btn-primary btn-sm" target="_blank" href="https://www.wenzika.com/">直达专题</a>
	</li>
	<li class="ebox-i ebox-04">
		<h4>Windows</h4>
		<p>全球最多用户使用系统常见问题搜罗</p>
		<a class="btn btn-primary btn-sm" target="_blank" href="https://www.wenzika.com/">直达专题</a>
	</li>
	<li class="ebox-i ebox-100">
		<h4>WordPress</h4>
		<p>一个注重美学、易用性和网络标准的个人信息发布平台<br>WP插件|WP主题|WP常见问题</p>
		<a class="btn btn-danger btn-sm" target="_blank" href="https://www.wenzika.com/">直达专题</a>
		<a class="btn btn-default btn-sm" href="https://www.wenzika.com/">了解更多</a> 
	</li>
</ul>
');
		$instance = wp_parse_args((array) $instance, $defaults);
		echo '<p>' . "\r\n" . '<label>' . "\r\n" . '主题名称：' . "\r\n" . '<input id="';
		echo $this->get_field_id('title');
		echo '" name="';
		echo $this->get_field_name('title');
		echo '" type="text" value="';
		echo $instance['title'];
		echo '" class="widefat" />' . "\r\n" . '</label>' . "\r\n" . '</p>' . "\r\n" . '<p>' . "\r\n" . '<label>' . "\r\n".'	广告代码：' . "\r\n" . '<textarea id="';
		echo $this->get_field_id('code');
		echo '" name="';
		echo $this->get_field_name('code');
		echo '" class="widefat" rows="12" style="font-family:Courier New;">';
		echo $instance['code'];
		echo '</textarea>' . "\r\n" . '</label>' . "\r\n" . '</p>' . "\r\n" . '';
	}
}
?>