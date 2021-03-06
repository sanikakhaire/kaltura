DROP TABLE IF EXISTS `kaltura_op_mon_bisources`.`bisources_kmc_event_type`;

CREATE TABLE `kaltura_op_mon_bisources`.`bisources_kmc_event_type` (
  `kmc_event_type_id` SMALLINT NOT NULL ,
  `kmc_event_type_name` VARCHAR(50) DEFAULT 'missing value',
  PRIMARY KEY (`kmc_event_type_id`)
) ENGINE=MYISAM  DEFAULT CHARSET=utf8;

INSERT INTO kaltura_op_mon_bisources.bisources_kmc_event_type (kmc_event_type_id,kmc_event_type_name)
	VALUES
	(1001 , 'CONTENT_PAGE_VIEW' ),
	(1010 , 'CONTENT_ADD_PLAYLIST' ),
	(1011 , 'CONTENT_EDIT_PLAYLIST' ),
	(1012 , 'CONTENT_DELETE_PLAYLIST' ),
    (1058 , 'CONTENT_DELETE_ITEM' ),
	(1013 , 'CONTENT_EDIT_ENTRY' ),
	(1014 , 'CONTENT_CHANGE_THUMBNAIL' ),
	(1015 , 'CONTENT_ADD_TAGS' ),
	(1016 , 'CONTENT_REMOVE_TAGS' ),
	(1017 , 'CONTENT_ADD_ADMIN_TAGS' ),
	(1018 , 'CONTENT_REMOVE_ADMIN_TAGS' ),
	(1019 , 'CONTENT_DOWNLOAD' ),
	(1020 , 'CONTENT_APPROVE_MODERATION' ),
	(1021 , 'CONTENT_REJECT_MODERATION' ),
	(1022 , 'CONTENT_BULK_UPLOAD' ),
	(1023 , 'CONTENT_ADMIN_KCW_UPLOAD' ),
    (1057 , 'CONTENT_CONTENT_GO_TO_PAGE' ),
	(1030 , 'ACCOUNT_CHANGE_PARTNER_INFO' ),
	(1031 , 'ACCOUNT_CHANGE_LOGIN_INFO' ),
	(1032 , 'ACCOUNT_CONTACT_US_USAGE' ),
	(1033 , 'ACCOUNT_UPDATE_SERVER_SETTINGS' ),
	(1034 , 'ACCOUNT_ACCOUNT_OVERVIEW' ),
	(1035 , 'ACCOUNT_ACCESS_CONTROL' ),
	(1036 , 'ACCOUNT_TRANSCODING_SETTINGS' ),
	(1037 , 'ACCOUNT_ACCOUNT_UPGRADE' ),
	(1038 , 'ACCOUNT_SAVE_SERVER_SETTINGS' ),
	(1039 , 'ACCOUNT_ACCESS_CONTROL_DELETE' ),
	(1040 , 'ACCOUNT_SAVE_TRANSCODING_SETTINGS' ),
    (1041 , 'LOGIN' ),
    (1042 , 'DASHBOARD_IMPORT_CONTENT' ),
    (1043 , 'DASHBOARD_UPDATE_CONTENT' ),
	(1044 , 'DASHBOARD_ACCOUNT_CONTACT_US' ),
	(1045 , 'DASHBOARD_VIEW_REPORTS' ),
	(1046 , 'DASHBOARD_EMBED_PLAYER' ),
	(1047 , 'DASHBOARD_EMBED_PLAYLIST' ),
	(1048 , 'DASHBOARD_CUSTOMIZE_PLAYERS' ),
	(1050 , 'APP_STUDIO_NEW_PLAYER_SINGLE_VIDEO' ),
	(1051 , 'APP_STUDIO_NEW_PLAYER_PLAYLIST' ),
	(1052 , 'APP_STUDIO_NEW_PLAYER_MULTI_TAB_PLAYLIST' ),
	(1053 , 'APP_STUDIO_EDIT_PLAYER_SINGLE_VIDEO' ),
	(1054 , 'APP_STUDIO_EDIT_PLAYER_PLAYLIST' ),
	(1055 , 'APP_STUDIO_EDIT_PLAYER_MULTI_TAB_PLAYLIST' ),
	(1056 , 'APP_STUDIO_DUPLICATE_PLAYER' );
