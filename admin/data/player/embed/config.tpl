<html>
<head>
	<title>{{$data.title}}</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link href="{{$data.canonical_url}}" rel="canonical"/>
	{{if $data.description!=''}}
		<meta name="description" content="{{$data.description}}"/>
	{{/if}}
	{{if $data.tags_as_string!=''}}
		<meta name="keywords" content="{{$data.tags_as_string}}"/>
	{{/if}}
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:title" content="{{$data.title}}"/>
	<meta property="og:image" content="{{$flashvars.preview_url}}"/>
	<meta property="og:description" content="{{$data.description}}"/>

	<style type="text/css">
		/* related videos in player */
		.player-related-videos {
			position: absolute;
			left: 0;
			top: 0;
			right: 0;
			bottom: 0;
			padding: 5px 10px 30px 10px;
			background: #000000;
			overflow: hidden;
		}
		.player-related-videos .player-related-videos-container {
			position: relative;
			width: 100%;
			height: 100%;
			overflow: hidden;
			text-align: center;
		}
		.player-related-videos .player-related-videos-item {
			position: relative;
			display: inline-block;
			vertical-align: middle;
			margin-top: 5px;
		}
		.player-related-videos .player-related-videos-item .title {
			display: none;
			position: absolute;
			left: 0;
			top: 0;
			right: 0;
			height: 52px;
			overflow: hidden;
			text-align: left;
			padding: 5px;
			color: #ffffff;
			background: -moz-linear-gradient(top, rgba(12, 12, 12, 0.8) 0px, transparent 50px);
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0px, rgba(12, 12, 12, 0.8)), color-stop(50px, transparent));
			background: -webkit-linear-gradient(top, rgba(12, 12, 12, 0.8) 0px, transparent 50px);
			background: -o-linear-gradient(top, rgba(12, 12, 12, 0.8) 0px, transparent 50px);
			background: -ms-linear-gradient(top, rgba(12, 12, 12, 0.8) 0px, transparent 50px);
			background: linear-gradient(to bottom, rgba(12, 12, 12, 0.8) 0px, transparent 50px);
		}
		.player-related-videos .player-related-videos-item .duration {
			display: none;
			position: absolute;
			bottom: 5px;
			right: 5px;
			color: #ffffff;
			background: rgba(12, 12, 12, 0.8);
			padding: 2px 5px;
		}
		.player-related-videos .player-related-videos-item:hover .title,
		.player-related-videos .player-related-videos-item:hover .duration {
			display: block;
		}

		.error-message {
			width: 100%;
			text-align: center;
			position: absolute;
			top: 49%
		}
	</style>
</head>
<body style="margin: 0; padding: 0; background: #000; color: #fff">
{{if $data.status_id==5}}
	<div class="error-message">{{$data.delete_reason|default:$lang.videos.video_player_not_allowed}}</div>
{{elseif $data.can_watch==0}}
	<div class="error-message">{{$lang.videos.video_player_not_allowed}}</div>
{{else}}
	{{if $data.load_type_id==3}}
		{{$data.embed|regex_replace:'/width="[0-9]+"/':'width="100%"'|regex_replace:'/height="[0-9]+"/':'height="100%"'|smarty:nodefaults}}
	{{elseif $flashvars_embed.video_url==''}}
		<div class="error-message">{{$lang.videos.video_player_not_allowed}}</div>
	{{else}}
		<div style="width: 100%; height: 100%;"><div id="kt_player"></div></div>
		<script type="text/javascript" src="{{$config.project_url}}/player/kt_player.js?v={{$config.project_version}}"></script>
		<script type="text/javascript">
			/* <![CDATA[ */
			function getEmbed() {
				var embedCode = '<iframe width="{{$player_size_embed[0]}}" height="{{$player_size_embed[1]}}" src="{{$config.project_url}}/embed/{{$data.video_id}}" frameborder="0" allowfullscreen>';
				embedCode += '</iframe>';
				return embedCode;
			}

			var flashvars = {
				{{foreach name=data key=key item=item from=$flashvars_embed}}
					{{$key}}: '{{$item|replace:"'":"\'"}}'{{if !$smarty.foreach.data.last}}, {{/if}}
				{{/foreach}}
			};
			{{if $smarty.request.skin=='black'}}
				flashvars['skin'] = 'dark.css';
			{{elseif $smarty.request.skin=='white'}}
				flashvars['skin'] = 'white.css';
			{{/if}}
			{{if $smarty.request.autoplay=='true' || $smarty.request.autoplay=='1'}}
				flashvars['autoplay'] = 'true';
			{{elseif $smarty.request.autoplay=='false' || $smarty.request.autoplay=='0'}}
				flashvars['autoplay'] = 'false';
			{{/if}}

			kt_player('kt_player', '{{$config.project_url}}/player/kt_player.swf?v={{$config.project_version}}', '100%', '100%', flashvars);
			/* ]]> */
		</script>
	{{/if}}
{{/if}}
</body></html>