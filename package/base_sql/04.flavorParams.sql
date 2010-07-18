insert into `flavor_params` (`id`, `version`, `partner_id`, `name`, `tags`, `description`, `ready_behavior`, `created_at`, `updated_at`, `deleted_at`, `is_default`, `format`, `video_codec`, `video_bitrate`, `audio_codec`, `audio_bitrate`, `audio_channels`, `audio_sample_rate`, `audio_resolution`, `width`, `height`, `frame_rate`, `gop_size`, `two_pass`, `conversion_engines`, `conversion_engines_extra_params`, `custom_data`, `view_order`, `creation_mode`) 
values(0,'0','0','Source','source','Maintains the original format and settings of the file - duplicate of the source file','0',NOW(),NOW(),NULL,'1','','','0','','0','0','0','0','0','0','0','0','0','','',NULL,'0','1');


update flavor_params set id = 0 where id = 1;
ALTER TABLE flavor_params AUTO_INCREMENT = 1;

insert into `flavor_params` (`id`, `version`, `partner_id`, `name`, `tags`, `description`, `ready_behavior`, `created_at`, `updated_at`, `deleted_at`, `is_default`, `format`, `video_codec`, `video_bitrate`, `audio_codec`, `audio_bitrate`, `audio_channels`, `audio_sample_rate`, `audio_resolution`, `width`, `height`, `frame_rate`, `gop_size`, `two_pass`, `conversion_engines`, `conversion_engines_extra_params`, `custom_data`, `view_order`, `creation_mode`) 
values(1,'0','0','HD','web,mbr','High Definition','2',NOW(),NOW(),NULL,'1','flv','vp6','4000','mp3','192','0','0','0','0','1080','0','0','0','2,99,3','',NULL,'0','1');

insert into `flavor_params` (`id`, `version`, `partner_id`, `name`, `tags`, `description`, `ready_behavior`, `created_at`, `updated_at`, `deleted_at`, `is_default`, `format`, `video_codec`, `video_bitrate`, `audio_codec`, `audio_bitrate`, `audio_channels`, `audio_sample_rate`, `audio_resolution`, `width`, `height`, `frame_rate`, `gop_size`, `two_pass`, `conversion_engines`, `conversion_engines_extra_params`, `custom_data`, `view_order`, `creation_mode`) 
values(2,'0','0','High - Large','web,mbr','High web quality, large frame','2',NOW(),NOW(),NULL,'1','flv','vp6','2500','mp3','128','0','0','0','0','720','0','0','0','2,99,3','',NULL,'0','1');

insert into `flavor_params` (`id`, `version`, `partner_id`, `name`, `tags`, `description`, `ready_behavior`, `created_at`, `updated_at`, `deleted_at`, `is_default`, `format`, `video_codec`, `video_bitrate`, `audio_codec`, `audio_bitrate`, `audio_channels`, `audio_sample_rate`, `audio_resolution`, `width`, `height`, `frame_rate`, `gop_size`, `two_pass`, `conversion_engines`, `conversion_engines_extra_params`, `custom_data`, `view_order`, `creation_mode`) 
values(3,'0','0','Standard - Large','web,mbr','Standard web quality, large frame','2',NOW(),NOW(),NULL,'1','flv','vp6','1350','mp3','96','0','0','0','0','720','0','0','0','2,99,3','',NULL,'0','1');

insert into `flavor_params` (`id`, `version`, `partner_id`, `name`, `tags`, `description`, `ready_behavior`, `created_at`, `updated_at`, `deleted_at`, `is_default`, `format`, `video_codec`, `video_bitrate`, `audio_codec`, `audio_bitrate`, `audio_channels`, `audio_sample_rate`, `audio_resolution`, `width`, `height`, `frame_rate`, `gop_size`, `two_pass`, `conversion_engines`, `conversion_engines_extra_params`, `custom_data`, `view_order`, `creation_mode`) 
values(4,'0','0','Standard - Small','web,mbr','Standard web quality, small frame','2',NOW(),NOW(),NULL,'1','flv','vp6','750','mp3','96','0','0','0','0','352','0','0','0','2,99,3','',NULL,'0','1');

insert into `flavor_params` (`id`, `version`, `partner_id`, `name`, `tags`, `description`, `ready_behavior`, `created_at`, `updated_at`, `deleted_at`, `is_default`, `format`, `video_codec`, `video_bitrate`, `audio_codec`, `audio_bitrate`, `audio_channels`, `audio_sample_rate`, `audio_resolution`, `width`, `height`, `frame_rate`, `gop_size`, `two_pass`, `conversion_engines`, `conversion_engines_extra_params`, `custom_data`, `view_order`, `creation_mode`) 
values(5,'0','0','Basic - Small','web,mbr','Basic web quality, small frame. To be used for low resource environments.','2',NOW(),NOW(),NULL,'1','flv','vp6','400','mp3','96','0','0','0','0','352','0','0','0','2,99,3','',NULL,'0','1');

insert into `flavor_params` (`id`, `version`, `partner_id`, `name`, `tags`, `description`, `ready_behavior`, `created_at`, `updated_at`, `deleted_at`, `is_default`, `format`, `video_codec`, `video_bitrate`, `audio_codec`, `audio_bitrate`, `audio_channels`, `audio_sample_rate`, `audio_resolution`, `width`, `height`, `frame_rate`, `gop_size`, `two_pass`, `conversion_engines`, `conversion_engines_extra_params`, `custom_data`, `view_order`, `creation_mode`) 
values(6,'0','0','HQ MP4 for Export','mp4_export,web','High web quality in MP4 format, to be used for download or syndication','0',NOW(),NOW(),NULL,'1','mp4','h264','2500','aac','128','0','0','0','0','720','0','0','0','2','',NULL,'0','1');

insert into `flavor_params` (`id`, `version`, `partner_id`, `name`, `tags`, `description`, `ready_behavior`, `created_at`, `updated_at`, `deleted_at`, `is_default`, `format`, `video_codec`, `video_bitrate`, `audio_codec`, `audio_bitrate`, `audio_channels`, `audio_sample_rate`, `audio_resolution`, `width`, `height`, `frame_rate`, `gop_size`, `two_pass`, `conversion_engines`, `conversion_engines_extra_params`, `custom_data`, `view_order`, `creation_mode`) 
values(7,'0','0','Editable','edit,web','Good web quality, to be used for editable content','0',NOW(),NOW(),NULL,'1','flv','vp6','700','mp3','64','0','0','0','0','480','0','5','0','2,99,3','',NULL,'0','1');

