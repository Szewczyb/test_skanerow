<?php

return [
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Active Directory 域',
    'ad_domain_help'			=> '通常(但並非全部情況下)這與您的郵件域相同。',
    'ad_append_domain_label'    => '附加網域名稱',
    'ad_append_domain'          => '在使用者名稱欄位附加網域名稱',
    'ad_append_domain_help'     => '使用者不需要輸入 "username@domain.local"，他們只需要輸入 "username"。',
    'admin_cc_email'            => '電子郵件副本',
    'admin_cc_email_help'       => '如果您想將發送給用戶的繳回/借出電子郵件的副本發送到其他電子郵件帳戶，請在此處輸入。否則，請將此字段留空。',
    'is_ad'				        => '這是AD域伺服器',
    'alerts'                	=> '警告',
    'alert_title'               => '更新通知設定',
    'alert_email'				=> '發送警報',
    'alert_email_help'    => '您希望警報傳送到的電子郵件地址或分配列表，以逗號分隔',
    'alerts_enabled'			=> '警報已啟用',
    'alert_interval'			=> '警報閾值(天)',
    'alert_inv_threshold'		=> '庫存警報閾值',
    'allow_user_skin'           => '允許使用者介面',
    'allow_user_skin_help_text' => '勾選此框將允許使用者使用不同的使用者介面。',
    'asset_ids'					=> '資產ID',
    'audit_interval'            => '稽核間隔',
    'audit_interval_help'       => '如果您需要定期實地稽核您的資產，請輸入您使用的間隔月數。如果您更新此值，所有具有即將進行的稽核日期的資產的 "下一次稽核日期" 將被更新。',
    'audit_warning_days'        => '稽核警告閾值',
    'audit_warning_days_help'   => '當資產到期時，我們應該提前幾天提前審核？',
    'auto_increment_assets'		=> '產生自動遞增資產標籤',
    'auto_increment_prefix'		=> '前綴(可選)',
    'auto_incrementing_help'    => '首先設定此選項以設定自動遞增資產標籤',
    'backups'					=> '備份',
    'backups_help'              => '建立, 下載和還原備份 ',
    'backups_restoring'         => '從備份還原',
    'backups_upload'            => '上傳備份',
    'backups_path'              => '伺服器上的備份儲存在 <code>:path</code>',
    'backups_restore_warning'   => '使用還原按鈕 <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> 從之前的備份還原。 (這目前不適用於 S3 檔案儲存或 Docker。)<br><br>您的 <strong>整個 :app_name 資料庫和所有上傳的檔案將被完全取代</strong> 為備份檔案中的內容。',
    'backups_logged_out'         => '所有現有的使用者，包括您，一旦您的還原完成將被登出。',
    'backups_large'             => '非常大的備份可能在還原嘗試時超時，可能仍需要透過命令列執行。',
    'barcode_settings'			=> '條碼設定',
    'confirm_purge'			    => '確認清除',
    'confirm_purge_help'		=> '在下面的框中輸入文字 "DELETE" 以清除您的已刪除記錄。此操作無法撤銷，並將永久刪除所有軟刪除的項目和使用者。 （在進行此操作之前，您應該先進行備份，以防萬一。）',
    'custom_css'				=> '自訂CSS',
    'custom_css_help'			=> '輸入您喜歡的CSS格式覆蓋。不要包括 &lt;style&gt;&lt;/style&gt; 標籤。',
    'custom_forgot_pass_url'	=> '自訂密碼重置網址',
    'custom_forgot_pass_url_help'	=> '這將替換登錄屏幕上的忘記密碼URL，有助於將用戶引導至內部或託管的LDAP密碼重置功能。它將禁用本地用戶遺忘密的碼功能。',
    'dashboard_message'			=> '儀表板消息',
    'dashboard_message_help'	=> '該段文字將顯示在儀表板上，供有權查看儀表板的任何人使用。',
    'default_currency'  		=> '預設貨幣',
    'default_eula_text'			=> '預設EULA',
    'default_language'			=> '預設語言',
    'default_eula_help_text'	=> '您也可以將自訂的EULA與特定資產類別相關聯。',
    'display_asset_name'        => '顯示資產名稱',
    'display_checkout_date'     => '顯示借出日期',
    'display_eol'               => '以表格形式顯示EOL',
    'display_qr'                => '顯示二維條碼',
    'display_alt_barcode'		=> '顯示條碼',
    'email_logo'                => 'Email Logo',
    'barcode_type'				=> '二維條碼類型',
    'alt_barcode_type'			=> '條碼類型',
    'email_logo_size'       => '在電子郵件中看起來最好的是方形標誌。',
    'enabled'                   => '已啟用',
    'eula_settings'				=> 'EULA 設定',
    'eula_markdown'				=> 'EULA中可使用<a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => '接受的檔案類型是 ico、png 和 gif。其他影象格式可能無法在所有瀏覽器中正常工作。',
    'favicon_size'          => '網站圖示應該是方形影象，16x16 像素。',
    'footer_text'               => '附加頁尾文字',
    'footer_text_help'          => '此段文字將出現在右側頁尾中。鏈接允許使用 <a href="https://help.github.com/articles/github-flavored-markdown/">Github風格Markdown</a>。換行符、標題、圖像等可能會導致不可預知的結果。',
    'general_settings'			=> '一般設定',
    'general_settings_keywords' => '公司支援、簽名、接受、電子郵件格式、使用者名稱格式、影象、每頁、縮圖、eula、tos、儀表板、隱私',
    'general_settings_help'     => '預設 EULA 等',
    'generate_backup'			=> '產生備份',
    'header_color'              => '標題顏色',
    'info'                      => '這些設定允許您自訂您的安裝選項',
    'label_logo'                => '標籤標誌',
    'label_logo_size'           => '方形標誌看起來最好 - 將在每個資產標籤的右上角顯示。',
    'laravel'                   => 'Laravel版本',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => '預設權限群組',
    'ldap_default_group_info'   => '選擇一個群組以指派給新同步的使用者。記住，使用者取得他們被指派的群組的權限。',
    'no_default_group'          => '無預設群組',
    'ldap_help'                 => 'LDAP/Active Directory',
    'ldap_client_tls_key'       => 'LDAP 客戶端 TLS 金鑰',
    'ldap_client_tls_cert'      => 'LDAP 客戶端 TLS 憑證',
    'ldap_enabled'              => '啟用LDAP驗證',
    'ldap_integration'          => 'LDAP整合',
    'ldap_settings'             => 'LDAP設定',
    'ldap_client_tls_cert_help' => 'LDAP 連線的客戶端 TLS 憑證和金鑰通常只在 "安全 LDAP" 的 Google Workspace 設定中有用。兩者都需要。',
     'ldap_client_tls_key'       => 'LDAP 客戶端 TLS 金鑰',
    'ldap_location'             => 'LDAP 位置',
'ldap_location_help'             => '如果在 Base Bind DN 中<strong>未使用 OU</strong>，則應使用 Ldap 位置欄位。如果正在使用 OU 搜尋，請將此欄位留空。',
    'ldap_login_test_help'      => '從上方指定的 DN 中輸入有效的 LDAP 使用者名和密碼, 以測試是否正確配置了 LDAP 登錄。您必須先保存更新的 LDAP 設置。',
    'ldap_login_sync_help'      => '這僅測試 LDAP 可以正確同步。如果 LDAP 身份驗證查詢不正確, 使用者可能仍無法登錄。您必須先保存更新的 LDAP 設置。',
    'ldap_manager'              => 'LDAP 管理者',
    'ldap_server'               => 'LDAP伺服器',
    'ldap_server_help'          => '這應以 ldap:// (未加密或TLS加密) 或 ldaps:// (SSL加密) 開頭',
    'ldap_server_cert'			=> '檢查LDAP的SSL憑證',
    'ldap_server_cert_ignore'	=> '允許未通過校驗旳SSL憑證',
    'ldap_server_cert_help'		=> '如果您使用了自簽署憑證，請勾選',
    'ldap_tls'                  => '使用TLS',
    'ldap_tls_help'             => '當LDAP伺服器使用STARTTLS時請勾選此選項',
    'ldap_uname'                => 'LDAP使用者',
    'ldap_dept'                 => 'LDAP 部門',
    'ldap_phone'                => 'LDAP 電話號碼',
    'ldap_jobtitle'             => 'LDAP 職位頭銜',
    'ldap_country'              => 'LDAP 國家',
    'ldap_pword'                => 'LDAP密碼',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'LDAP篩選',
    'ldap_pw_sync'              => 'LDAP 密碼同步',
    'ldap_pw_sync_help'         => '如果您不想要LDAP密碼與本地端密碼同步，請取消勾選。取消同步設定將造成當本地端與LDAP失去連線時，使用者無法登入。
',
    'ldap_username_field'       => '使用者名稱',
    'ldap_lname_field'          => '姓',
    'ldap_fname_field'          => 'LDAP 名',
    'ldap_auth_filter_query'    => 'LDAP 認證請求',
    'ldap_version'              => 'LDAP 版本',
    'ldap_active_flag'          => 'LDAP 啟用標誌',
    'ldap_activated_flag_help'  => '此值用於確定同步的使用者是否可以登入 Snipe-IT。 <strong>這不會影響他們的能力檢查項目或將其借出</strong>，並應該是您的 AD/LDAP 中的<strong>屬性名稱</strong>，<strong>而不是值</strong>。<br><br>如果此欄位設定為在您的 AD/LDAP 中不存在的欄位名稱，或者 AD/LDAP 欄位中的值設定為 <code>0</code> 或 <code>false</code>，<strong>將停用使用者登入</strong>。如果 AD/LDAP 欄位中的值設定為 <code>1</code> 或 <code>true</code> 或 <em>任何其他文字</em> 則表示使用者可以登入。當您的 AD 中的欄位為空時，我們尊重 <code>userAccountControl</code> 屬性，通常允許非暫停的使用者登入。',
    'ldap_emp_num'              => 'LDAP 員工編號',
    'ldap_email'                => 'LDAP Email',
    'ldap_test'                 => '測試 LDAP',
    'ldap_test_sync'            => '測試 LDAP 同步',
    'license'                   => '軟體授權',
    'load_remote_text'          => '外部腳本',
    'load_remote_help_text'		=> '允許 Snipe-IT 安裝外部腳本',
    'login'                     => '登入嘗試',
    'login_attempt'             => '登入嘗試',
    'login_ip'                  => 'IP 位址',
    'login_success'             => '成功？',
    'login_user_agent'          => '使用者代理',
    'login_help'                => '嘗試登入的列表',
    'login_note'                => '登錄說明',
    'login_note_help'           => '可選地，在您的登錄屏幕上包括幾個句子，例如幫助找到丟失或被盜設備的人。此字段接受<a href="https://help.github.com/articles/github-flavored-markdown/">Github風味的markdown</a>',
    'login_remote_user_text'    => '遠端使用者登錄選項',
    'login_remote_user_enabled_text' => '啟用遠端使用者登錄',
    'login_remote_user_enabled_help' => '此選項根據 "公用網關介面 (rfc3875)"標準，啟用 REMOTE_USER 進行身份驗證',
    'login_common_disabled_text' => '禁用其他認證機制',
    'login_common_disabled_help' => '該選項禁用其他身份驗證機制。如果您確定您的REMOTE_USER登錄已在使用，請啟用此選項',
    'login_remote_user_custom_logout_url_text' => '自訂登出網址',
    'login_remote_user_custom_logout_url_help' => '如果此處提供了 URL，則在用戶登出 Snipe-IT 後，用戶將被重定向到此 URL。這對於正確關閉身份驗證提供程序非常有用。',
    'login_remote_user_header_name_text' => '自訂使用者名稱標頭',
    'login_remote_user_header_name_help' => '使用指定的標頭而不是 REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => '在列印中使用',
    'logo_print_assets_help'    => '在可列印資產清單上使用商標 ',
    'full_multiple_companies_support_help_text' => '限制使用者（包括管理員） 僅能存取該公司的資產',
    'full_multiple_companies_support_text' => '完整支援多公司',
    'show_in_model_list'   => '在模型下拉選單中顯示',
    'optional'					=> '可選',
    'per_page'                  => '每頁呈現結果',
    'php'                       => 'PHP 版本',
    'php_info'                  => 'PHP 資訊',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, system, info',
    'php_overview_help'         => 'PHP 系統資訊',
    'php_gd_info'               => '您必須安裝 php-gd 顯示二維條碼，請參閱安裝說明。',
    'php_gd_warning'            => 'PHP 圖形處理及 php-gd 套件沒有安裝',
    'pwd_secure_complexity'     => '密碼複雜性',
    'pwd_secure_complexity_help' => '選擇要強制執行的任何密碼複雜度規則。',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => '密碼不能與名字、姓氏、電子郵件或使用者名稱相同',
    'pwd_secure_complexity_letters' => '至少需要一個字母',
    'pwd_secure_complexity_numbers' => '至少需要一個數字',
    'pwd_secure_complexity_symbols' => '至少需要一個符號',
    'pwd_secure_complexity_case_diff' => '至少需要一個大寫和一個小寫',
    'pwd_secure_min'            => '密碼的最少字元',
    'pwd_secure_min_help'       => '最小允許值是 8',
    'pwd_secure_uncommon'       => '防止常見密碼',
    'pwd_secure_uncommon_help'  => '這將不允許用戶使用違反報告的前10,000個密碼的常用密碼。',
    'qr_help'                   => '允許二維條碼首次設置',
    'qr_text'                   => '二維條碼文字',
    'saml'                      => 'SAML',
    'saml_title'                => '更新 SAML 設定',
    'saml_help'                 => 'SAML 設定',
    'saml_enabled'              => '已啟用 SAML',
    'saml_integration'          => 'SAML 整合',
    'saml_sp_entityid'          => '實體 ID',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) 網址',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) 網址',
    'saml_sp_x509cert'          => '公開憑證',
    'saml_sp_metadata_url'      => '元數據網址',
    'saml_idp_metadata'         => 'SAML IdP 元數據',
    'saml_idp_metadata_help'    => '您可以使用網址或 XML 檔案指定 IdP 元數據。',
    'saml_attr_mapping_username' => '屬性對映 - 使用者名稱',
    'saml_attr_mapping_username_help' => '如果屬性對映未指定或無效，將使用 NameID。',
    'saml_forcelogin_label'     => 'SAML 強制登入',
    'saml_forcelogin'           => '將 SAML 設為主要登入',
    'saml_forcelogin_help'      => '您可以使用 \'/login?nosaml\' 來到達正常的登入頁面。',
    'saml_slo_label'            => 'SAML 單一登出',
    'saml_slo'                  => '登出時向 IdP 傳送 LogoutRequest',
    'saml_slo_help'             => '這將導致使用者在登出時首先被重定向到 IdP。如果 IdP 不正確支援 SP 啟動的 SAML SLO，請取消選中。',
    'saml_custom_settings'      => 'SAML 自訂設定',
    'saml_custom_settings_help' => '您可以指定給 onelogin/php-saml 庫的其他設定。請自行承擔風險。',
    'saml_download'             => '下載元數據',
    'setting'                   => '設定',
    'settings'                  => '設定',
    'show_alerts_in_menu'       => '在頂部選單中顯示警告',
    'show_archived_in_list'     => '封存的資產',
    'show_archived_in_list_text'     => '在“所有資產”列表中顯示已封存的資產',
    'show_assigned_assets'      => '顯示分配給資產的資產',
    'show_assigned_assets_help' => '在檢視使用者 -> 資產、檢視使用者 -> 資訊 -> 列印所有分配和帳戶 -> 檢視分配資產中顯示分配給其他資產的資產。',
    'show_images_in_email'     => '在電子郵件中顯示圖片',
    'show_images_in_email_help'   => '如果您的Snipe-IT安裝位於VPN或封閉網絡後面，並且外部網絡的用戶無法將通過此安裝提供的圖像加載到其電子郵件中，請取消選中此框。',
    'site_name'                 => '站台名稱',
    'integrations'               => '整合',
    'slack'                     => 'Slack',
    'general_webhook'           => '一般 Webhook',
    'webhook'                   => ':app',
    'webhook_presave'           => '儲存前測試',
    'webhook_title'               => '更新 Webhook 設定',
    'webhook_help'                => '整合設定',
    'webhook_botname'             => ':app Bot 名稱',
    'webhook_channel'             => ':app 頻道',
    'webhook_endpoint'            => ':app 端點',
    'webhook_integration'         => ':app 設定',
    'webhook_test'                 =>'測試 :app 整合',
    'webhook_integration_help'    => ':app 整合是選擇性的，但如果您希望使用它，則需要端點和頻道。要設定 :app 整合，您必須先在您的 :app 帳戶上<a href=":webhook_link" target="_new" rel="noopener">建立傳入的 webhook</a>。在儲存之前，點選 <strong>測試 :app 整合</strong> 按鈕確認您的設定是否正確。',
    'webhook_integration_help_button'    => '一旦您儲存了您的 :app 資訊，將會出現一個測試按鈕。',
    'webhook_test_help'           => '測試您的 :app 整合是否設定正確。您必須先儲存更新的 :app 設定。',
    'snipe_version'  			=> 'Snipe-IT 版本',
    'support_footer'            => '支援頁尾連結',
    'support_footer_help'       => '指定誰可以看到指向Snipe-IT支持信息和用戶手冊的鏈接',
    'version_footer'            => '頁尾版本 ',
    'version_footer_help'       => '指定誰可以看到Snipe-IT版本和內部版本號。',
    'system'                    => '系統資訊',
    'update'                    => '更新設定',
    'value'                     => '價值',
    'brand'                     => '企業識別',
    'brand_keywords'            => '頁尾、標誌、列印、主題、面板、標頭、顏色、顏色、css',
    'brand_help'                => '標誌、網站名稱',
    'web_brand'                 => 'Web 品牌識別類型',
    'about_settings_title'      => '關於設定',
    'about_settings_text'       => '這些設定允許您自訂您的安裝偏好',
    'labels_per_page'           => '每頁顯示',
    'label_dimensions'          => '標籤尺寸（英吋）',
    'next_auto_tag_base'        => '下一個自動增量',
    'page_padding'              => '頁面邊框（英吋）',
    'privacy_policy_link'       => '連結到隱私條款。',
    'privacy_policy'            => '隱私條款',
    'privacy_policy_link_help'  => '如果此處包含網址，則根據GDPR，頁尾和系統發送的任何電子郵件中都會包含指向您的隱私權政策的鏈接。 ',
    'purge'                     => '清除已標記刪除的記錄',
    'purge_deleted'             => '清除已刪除',
    'labels_display_bgutter'    => '標籤底部裝訂線',
    'labels_display_sgutter'    => '標籤側邊裝訂線',
    'labels_fontsize'           => '標籤字體大小',
    'labels_pagewidth'          => '標籤寬度',
    'labels_pageheight'         => '標籤高度',
    'label_gutters'        => '標籤間隔（英吋）',
    'page_dimensions'        => '頁面尺寸（英吋）',
    'label_fields'          => '標籤可見欄位',
    'inches'        => '英吋',
    'width_w'        => '寬',
    'height_h'        => '高',
    'show_url_in_emails'                => '鏈接到Snipe-IT在電子郵件',
    'show_url_in_emails_help_text'      => '如果您不希望鏈接回電子郵件頁腳中的Snipe-IT安裝，請取消選中此框。如果您的大多數用戶從未登錄，則很有用',
    'text_pt'        => '磅',
    'thumbnail_max_h'   => '最大縮略圖高度',
    'thumbnail_max_h_help'   => '縮略圖可能在列表視圖中顯示的最大高度（以像素為單位）。最小25，最多500。',
    'two_factor'        => '雙因素身份驗證',
    'two_factor_secret'        => '雙因素驗證代碼',
    'two_factor_enrollment'        => '登記雙因素驗證',
    'two_factor_enabled_text'        => '啟用雙因素驗證',
    'two_factor_reset'        => '重設雙因素驗證',
    'two_factor_reset_help'        => '此動作會強制使用者再次透過 Google Authenticator 登記行動裝置，此動作可解決原登記行動裝置遺失的問題。',
    'two_factor_reset_success'          => '重設雙因素驗證裝置成功',
    'two_factor_reset_error'          => '重設雙因素驗證裝置失敗',
    'two_factor_enabled_warning'        => '啟用雙因素認證將需要您立即用登記的行動裝置驗證身份。如您尚未設置雙因素認證，您現在可以登記您的設備',
    'two_factor_enabled_help'        => '這將使用 Google Authenticator 做雙因素驗證。',
    'two_factor_optional'        => '可選項（如果允許，用戶可以啟用或禁用）',
    'two_factor_required'        => '強制所有使用者啟用',
    'two_factor_disabled'        => '已停用',
    'two_factor_enter_code'	=> '輸入雙因素認證代碼',
    'two_factor_config_complete'	=> '送出代碼',
    'two_factor_enabled_edit_not_allowed' => '您的管理員不允許您編輯此設定。',
    'two_factor_enrollment_text'	=> "雙因素認證是必要的，無論您是否已登記行動裝置。開啟您的 Google Authenticator app 並且掃描下方的 QR Code 以登記雙因素認證。當您已登記您的裝置，請在下方輸入認證代碼",
    'require_accept_signature'      => '需要簽名',
    'require_accept_signature_help_text'      => '啟用此功能將需要使用者親自簽名來接受一項資產。',
    'left'        => '左',
    'right'        => '右',
    'top'        => '頂部',
    'bottom'        => '底部',
    'vertical'        => '垂直',
    'horizontal'        => '水平',
    'unique_serial'                => '唯一序號',
    'unique_serial_help_text'                => '選中此框將強制對資產序號進行唯一性約束',
    'zerofill_count'        => '資產標籤長度，包括補零',
    'username_format_help'   => '只有在提供使用者名稱並且我們必須為您產生使用者名稱的匯入過程中才會使用此設定。',
    'oauth_title' => 'OAuth API 設定',
    'oauth' => 'OAuth',
    'oauth_help' => 'OAuth 端點設定',
    'asset_tag_title' => '更新資產標籤設定',
    'barcode_title' => '更新條碼設定',
    'barcodes' => '條碼',
    'barcodes_help_overview' => '條碼和 QR Code 設定',
    'barcodes_help' => '這將嘗試刪除快取的條碼。這通常只在您的條碼設定已更改，或者您的 Snipe-IT 網址已更改時使用。條碼將在下次存取時重新產生。',
    'barcodes_spinner' => '嘗試刪除檔案...',
    'barcode_delete_cache' => '刪除條碼快取',
    'branding_title' => '更新品牌設定',
    'general_title' => '更新一般設定',
    'mail_test' => '傳送測試',
    'mail_test_help' => '這將嘗試向 :replyto 傳送測試郵件。',
    'filter_by_keyword' => '按設定關鍵字篩選',
    'security' => '安全性',
    'security_title' => '更新安全性設定',
    'security_keywords' => '密碼、密碼、要求、雙因素、雙因素、常見密碼、遠端登入、登出、身份驗證',
    'security_help' => '雙因素、密碼限制',
    'groups_keywords' => '權限、權限群組、授權',
    'groups_help' => '帳戶權限群組',
    'localization' => '本地化',
    'localization_title' => '更新本地化設定',
    'localization_keywords' => '本地化、貨幣、本地、地區設定、時區、時區、國際、國際化、語言、語言、翻譯',
    'localization_help' => '語言, 日期顯示',
    'notifications' => '通知',
    'notifications_help' => '電子郵件通知與稽核設定',
    'asset_tags_help' => '遞增和前綴',
    'labels' => '標籤',
    'labels_title' => '更新標籤設定',
    'labels_help' => '標籤大小和設定',
    'purge' => '清除',
    'purge_keywords' => '永久刪除',
    'purge_help' => '清除已刪除的記錄',
    'ldap_extension_warning' => '似乎此伺服器上未安裝或啟用 LDAP 擴充套件。您仍然可以儲存您的設定，但在 LDAP 同步或登入將正常工作之前，您需要啟用 LDAP 擴充套件。',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => '員工編號',
    'create_admin_user' => '新增使用者 ::',
    'create_admin_success' => '成功! 您的管理員使用者已新增!',
    'create_admin_redirect' => '點擊這裡轉到您的應用程式登入!',
    'setup_migrations' => '資料庫移轉 ::',
    'setup_no_migrations' => '無需遷移。您的資料庫表已設定！',
    'setup_successful_migrations' => '您的資料庫欄位已建立',
    'setup_migration_output' => '遷移輸出：',
    'setup_migration_create_user' => '下一步: 建立使用者',
    'ldap_settings_link' => 'LAD 設定頁面',
    'slack_test' => '測試 <i class="fab fa-slack"></i> 整合',
    'label2_enable'           => 'New Label Engine',
    'label2_enable_help'      => 'Switch to the new label engine. <b>Note: You will need to save this setting before setting others.</b>',
    'label2_template'         => '範本',
    'label2_template_help'    => 'Select which template to use for label generation',
    'label2_title'            => '標題',
    'label2_title_help'       => 'The title to show on labels that support it',
    'label2_title_help_phold' => 'The placeholder <code>{COMPANY}</code> will be replaced with the asset&apos;s company name',
    'label2_asset_logo'       => 'Use Asset Logo',
    'label2_asset_logo_help'  => 'Use the logo of the asset&apos;s assigned company, rather than the value at <code>:setting_name</code>',
    'label2_1d_type'          => '1D Barcode Type',
    'label2_1d_type_help'     => 'Format for 1D barcodes',
    'label2_2d_type'          => '2D Barcode Type',
    'label2_2d_type_help'     => 'Format for 2D barcodes',
    'label2_2d_target'        => '2D Barcode Target',
    'label2_2d_target_help'   => 'The URL the 2D barcode points to when scanned',
    'label2_fields'           => 'Field Definitions',
    'label2_fields_help'      => 'Fields can be added, removed, and reordered in the left column. For each field, multiple options for Label and DataSource can be added, removed, and reordered in the right column.',
    'help_asterisk_bold'    => 'Text entered as <code>**text**</code> will be displayed as bold',
    'help_blank_to_use'     => 'Leave blank to use the value from <code>:setting_name</code>',
    'help_default_will_use' => '<code>:default</code> will use the value from <code>:setting_name</code>. <br>Note that the value of the barcodes must comply with the respective barcode spec in order to be successfully generated. Please see <a href="https://snipe-it.readme.io/docs/barcodes">the documentation <i class="fa fa-external-link"></i></a> for more details. ',
    'default'               => '開發人員選項',
    'none'                  => '無',
    'google_callback_help' => '這應該輸入為您的 Google OAuth 應用程式設定中的回呼網址，位於您組織的 <strong><a href="https://console.cloud.google.com/" target="_blank">Google 開發者控制台 <i class="fa fa-external-link" aria-hidden="true"></i></a></strong>。',
    'google_login'      => 'Google Workspace 登入設定',
    'enable_google_login'  => '允許使用者使用 Google Workspace 登入',
    'enable_google_login_help'  => '使用者將不會自動建立。他們必須在這裡和 Google Workspace 中都有現有的帳戶，並且他們在這裡的使用者名稱必須與他們的 Google Workspace 電子郵件地址相符。',
    'mail_reply_to' => 'Mail Reply-To Address',
    'mail_from' => 'Mail From Address',
    'database_driver' => 'Database Driver',
    'bs_table_storage' => 'Table Storage',
    'timezone' => 'Timezone',

];
