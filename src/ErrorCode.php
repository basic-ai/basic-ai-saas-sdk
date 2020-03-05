<?php

class ErrorCode
{
    public static $errorInfo = array (
        'language' => '语言',
        'language_zh_cn' => '简体中文',
        'language_zh_cn_simple' => '中',
        'language_en' => 'English',
        'language_en_simple' => 'En',
        'help' => '帮助',
        'system_expiry_date_passed' => '系统程序异常, 请联系管理员解决.',
        'system_ip_request_frequently' => '您访问频率过于频繁, 请稍后再试.',
        'system_not_open_ftp' => '系统未开启FTP功能',
        'mail_from_name' => 'Basicfinder',
        'config_post_max_size_error' => 'post_max_size配置错误，请联系管理员',
        'config_upload_max_filesize_error' => 'upload_max_fileseze配置错误，请联系管理员',
        'app_not_exist' => '此应用不存在',
        'app_not_match_user_type' => '此应用不匹配用户类型, 不允许访问',
        'user_username_existed' => '用户名已存在',
        'user_username_notexist' => '用户名不能为空',
        'user_email_existed' => '注册邮箱已被占用, 请更换其他邮箱',
        'user_email_not_exist' => '账号尚未注册',
        'user_email_not_given' => '邮箱不能为空',
        'user_email_format_error' => '邮箱格式错误',
        'email_format_error' => '邮箱格式错误',
        'user_email_mustbe_company' => '请填写企业邮箱',
        'user_phone_format_error' => '电话号码格式错误',
        'user_phone_not_exist' => '手机号码不存在',
        'user_phone_existed' => '电话号码已存在',
        'user_phone_not_given' => '手机号码不能为空',
        'user_phone_registered' => '手机号码已注册',
        'user_mobile_existed' => '该手机号已被占用，请更换其他号码',
        'user_verifycode_incorrect' => '验证码错误',
        'user_verifycode_timeout' => '验证码失效, 请重新点击获取验证码',
        'user_send_code' => '短信发送成功',
        'user_phone_verify_excessive' => '短信验证次数过多',
        'user_email_verify_excessive' => '邮件验证次数过多',
        'user_send_mobile_code_excessive' => '发送短信验证码次数过多',
        'user_send_email_code_excessive' => '发送邮件验证码次数过多',
        'user_email_notVerify' => '您的邮箱地址没有验证, 请去执行找回密码操作.',
        'user_mobile_notVerify' => '您的手机号没有验证, 请去执行找回密码操作.',
        'user_code_error_excessive' => '用户验证码错误次数过多',
        'user_mobile_not_exist' => '手机号码未注册',
        'customer_create_userExist' => '用户已存在',
        'key_not_given' => '缺少key参数',
        'op_param_invalid' => 'op无效',
        'cachekey_not_exist' => '缓存密钥不存在',
        'app_check_fail' => '应用检查失败',
        'format_error' => '文件格式错误',
        'param_error' => '参数错误',
        'back_data_erro' => '返回数据错误',
        'param_not_given' => '参数没有找到',
        'name_not_given' => '没有找到名字参数',
        'id_not_given' => '没有找到ID参数',
        'file_not_exist' => '文件不存在',
        'dir_no_files' => '文件不存在',
        'file_not_match' => '文件不匹配',
        'copy_dir_fail' => '无法复制文件夹,或因无权限',
        'copy_file_fail' => '无法复制文件,或因无权限',
        'content_format_error' => '内容格式错误',
        'function_param_error' => '方法参数错误',
        'mkdir_fail' => '创建文件夹失败',
        'create_dir_fail' => '创建文件夹失败(请查看磁盘空间是否充足)',
        'file_path_error' => '文件路径错误',
        'param_not_found' => '参数没有找到',
        'mail_subject_signupActivateLink' => '倍赛——激活账户',
        'mail_subject_forgetPasswordCode' => '倍赛——忘记密码',
        'mail_subject_changeMobileCode' => '倍赛——绑定手机号验证',
        'mail_subject_changeMobileSuccess' => '倍赛——绑定手机号成功',
        'mail_subject_changeEmailCode' => '倍赛——绑定验证邮箱',
        'mail_subject_changeEmailCodeNew' => '倍赛——绑定新验证邮箱',
        'mail_subject_changeEmailSuccess' => '倍赛——绑定邮箱成功',
        'sms_send_limit' => '短信发送频繁, 请稍后再试',
        'sms_send_error' => '短信服务异常，请稍后再试',
        'sms_change_email_code' => '修改邮箱验证码',
        'sms_change_email_succ' => '修改邮箱成功',
        'sms_change_mobile_code' => '修改手机号验证码',
        'sms_change_mobile_succ' => '修改手机号码成功',
        'sms_forget_password_code' => '忘记密码验证码',
        'sms_send_frequently' => '短信发送频繁',
        'user_not_exist' => '用户不存在',
        'user_not_login' => '请先登录',
        'login_not_allowed' => '此平台不允许你访问, 请查看帮助文档',
        'login_username_isnot_mobilenumber' => '所填用户名非手机号码',
        'login_username_errortimes_excessive' => '错误次数过多, 请休息一会',
        'loginhuicui_thirdparty_notexist' => '第三方配置错误',
        'loginhuicui_thirdparty_site_empty' => '第三方配置错误',
        'loginhuicui_thirdparty_teamname_repeat' => '第三方团队名称重复',
        'huicuiapi_loginresult_formaterror' => '用户或团队不存在，请在APP上入团',
        'login_activate_tokenMiss' => '请求令牌无效',
        'login_activate_tokenNotExist' => '请求令牌不正确',
        'login_activate_tokenTimeout' => '请求令牌不正确, 或已失效',
        'login_activate_statusNotAllow' => '用户非待激活状态',
        'user_nickname_not_given' => '昵称没有设置',
        'user_password_not_given' => '密码没有设置',
        'user_repassword_not_given' => '确认密码没有设置',
        'user_two_password_not_same' => '两次密码不相同',
        'signupByinvitation_token_expired' => '注册凭证已过期',
        'signupByinvitation_token_notexist' => '注册凭证不存在',
        'signupByinvitation_user_max_reached' => '租户用户数量已达最大',
        'create_fail' => '创建失败',
        'request_is_options' => '请求为options请求',
        'user_logged_in' => '您已登录',
        'ip_changed' => '您的IP发生变更, 请重新登录',
        'user_add_fail' => '添加用户失败',
        'signup_excessive' => '注册过于频繁',
        'signup_save_fail' => '注册失败',
        'login_excessive' => '登录过于频繁',
        'reset_password_link_invalid' => '您的重置密码链接无效',
        'reset_password' => '重置密码',
        'set_password' => '设置密码',
        'orig_password_incorrect' => '原始密码错误！',
        'passwords_not_consistent' => '两次输入的密码不一致!',
        'phone_format_error' => '电话格式错误!',
        'password_format_error' => '密码格式错误!',
        'username_or_password_fail' => '账户或密码不正确！',
        'password_fail_excessive' => '密码错误次数过多, 请稍后再试',
        'password_length_error' => '密码长度错误，长度须为6~18个字符,以字母开头',
        'token_fail' => 'token错误',
        'user_auditing' => '该账号正在审核中',
        'user_unavailable' => '该账号不可用',
        'email_field_not_found' => '缺少邮箱字段',
        'password_field_not_found' => '缺少密码字段',
        'teamid_field_not_found' => '缺少团队ID字段',
        'type_field_not_found' => '缺少类型字段',
        'crowdsourcingid_field_not_found' => '缺少众包ID字段',
        'excel_url_field_not_found' => '缺少Excel地址字段',
        'excel_file_not_found' => 'Excel文件未找到',
        'read_file_error' => '读取文件错误',
        'user_info_not_found' => '未找到用户信息',
        'import_user_existed' => '导入用户已存在',
        'import_user_existed_for_email' => '当前邮箱已存在',
        'excel_file_over_limit' => '导入个数超出限制',
        'cannot_delete_self' => '无法删除自己',
        'ftp_check_fail' => 'FTP账户检查失败',
        'user_not_in_teams' => '您没有加入任何团队',
        'user_not_in_crowdsourcings' => '您没有加入任何众包',
        'user_language_zh_cn' => '中文',
        'user_language_en' => '英文',
        'user_no_permission' => '没有权限',
        'user_cannot_updateself' => '禁止在非用户中心修改自己资料',
        'user_not_found' => '未找到用户',
        'user_id_not_given' => '没有找到用户ID参数',
        'user_ftp_fail' => '用户ftp失败',
        'user_type_error' => '用户类型错误',
        'user_not_assign_role' => '用户没有分类角色',
        'user_ids_not_given' => '没有找到用户ID参数',
        'user_ftp_not_open' => '你没有开通FTP功能',
        'user_access_token_existed' => '用户access_token已存在',
        'nickname_forbidden' => '用户昵称含有敏感词',
        'user_no_site' => '用户没有加入租户',
        'user_no_team' => '用户没有加入团队',
        'user_site_no_team' => '您的账号暂时无法使用,因所在企业已取消团队管理功能',
        'team_notselected' => '必须选择一个团队',
        'team_ineffective' => '必须选择一个有效的团队',
        'user_permission_forbidden' => '您没有权限操作',
        'user_permission_forbidden_for_manager' => '您没有操作管理员的权限',
        'user_update_teamIdParamNotFound' => '缺少团队信息',
        'user_import_paramTypeNotFound' => '缺少类型信息',
        'user_import_paramRoleNotFound' => '缺少角色信息',
        'user_import_paramEmailNotFound' => '缺少邮箱信息',
        'user_mobile_format_error' => '手机号码格式错误',
        'user_nickname_format_error' => '昵称长度不得超过10个中文字符',
        'user_status_not_active' => '未激活',
        'user_status_active' => '已激活',
        'user_status_disabled' => '已禁用',
        'user_status_deleted' => '已删除',
        'user_type_default' => '待核实',
        'user_type_admin' => '管理',
        'user_type_team' => '团队',
        'user_type_crowdsourcing' => '众包',
        'user_type_customer' => '客户',
        'user_type_root' => 'ROOT',
        'user_created_from_default' => '无',
        'user_created_from_www' => '官网注册',
        'user_created_from_add' => '后台添加',
        'user_created_from_huicui' => '荟萃用户',
        'user_created_from_beisai' => '倍赛用户',
        'user_created_from_invitation' => '邀请',
        'usermark_type_0' => '拜访',
        'usermark_type_1' => '电话',
        'usermark_type_2' => '邮件',
        'usermark_type_3' => '微信/qq',
        'usermark_type_4' => '其他',
        'user_field_id' => 'ID',
        'user_field_nickname' => '昵称',
        'user_field_start_time' => '开始时间',
        'user_field_end_time' => '截止时间',
        'user_field_type' => '用户类型',
        'user_field_status' => '用户状态',
        'user_field_email' => '用户邮箱',
        'user_field_mobile' => '用户手机号',
        'user_field_phone' => '用户电话',
        'user_field_city' => '市',
        'user_field_province' => '省',
        'user_field_country' => '国',
        'user_field_sex' => '性别',
        'user_field_access_token' => '用户凭证',
        'user_field_language' => '语言',
        'user_field_realname' => '真实姓名',
        'user_field_avatar' => '用户头像',
        'user_field_company' => '公司名称',
        'user_field_created_from' => '用户来源',
        'loginForm_field_username' => '账户名',
        'loginForm_field_password' => '登录密码',
        'loginForm_field_verifyCode' => '验证码',
        'loginForm_field_device_name' => '设备名称',
        'loginForm_field_device_number' => '设备号',
        'loginForm_field_device_token' => '设备token',
        'loginForm_field_app_key' => 'app_key',
        'loginForm_field_app_version' => 'app_version',
        'loginForm_field_mobileCode' => '手机验证码',
        'resetPasswordForm_field_newpassword' => '设置密码',
        'resetPasswordForm_field_confirmpassword' => '再次确认',
        'signupForm_field_email' => '账户名',
        'signupForm_field_type' => '类型',
        'signupForm_field_phone' => '电话',
        'signupForm_field_nickname' => '昵称',
        'signupForm_field_company' => '公司',
        'signupFormUser_field_mobile' => '手机号',
        'signupFormUser_field_type' => '类型',
        'signupFormUser_field_phone' => '电话',
        'signupFormUser_field_nickname' => '昵称',
        'signupFormUser_field_realname' => '真实姓名',
        'signupFormUser_field_company' => '公司名称',
        'signupFormUser_field_created_from' => '来源',
        'signupFormUser_field_mobileCode' => '短信验证码',
        'signupFormUser_field_password' => '密码',
        'signupFormUser_field_verifyCode' => '图片验证码',
        'updatePasswordForm_field_newpassword' => '新密码',
        'updatePasswordForm_field_repassword' => '确认密码',
        'userForm_field_phone' => '电话',
        'userForm_field_nickname' => '昵称',
        'userForm_field_company' => '公司名称',
        'userForm_field_type' => '类型',
        'userForm_field_email' => '邮箱',
        'userForm_field_mobile' => '手机号',
        'userForm_field_password' => '密码',
        'userForm_field_avatar' => '头像',
        'userForm_field_language' => '语言',
        'userForm_field_created_from' => '来源',
        'verifyEmailForm_field_email' => '邮箱',
        'verifyEmailForm_field_emailCode' => '验证码',
        'verifyMobileForm_field_mobile' => '手机号',
        'verifyMobileForm_field_mobileCode' => '手机验证码',
        'verifyPasswordForm_field_mobile' => '密码',
        'withdrawalForm_field_money' => '提现金额',
        'withdrawalForm_field_money_fee' => '交易费',
        'withdrawalForm_field_money_real' => '实际金额',
        'withdrawalForm_field_payment_account' => '提现账号',
        'withdrawalForm_field_payment_username' => '收款人姓名',
        'aimodel_id_not_given' => '没有找到模板id参数',
        'aimodel_not_found' => '模板没有找到',
        'aimodel_status_deleted' => '模板已删除',
        'aimodel_status_not_disabled' => '未启用的模板，才可以删除',
        'aimodel_category_name_existed' => '模板分类名称已存在',
        'aimodel_category_not_found' => '分类信息未找到',
        'status_not_allowed' => '模板状态不允许',
        'auth_role_not_found' => '没有找到角色权限信息',
        'auth_description_not_given' => '没有找到描述参数',
        'auth_role_create_fail' => '角色创建失败',
        'auth_info_param_invalid' => '更新信息无效',
        'auth_update_role_fail' => '更新角色信息失败',
        'auth_permission_not_found' => '没有找到权限名称',
        'auth_role_name_not_given' => '没有找到角色名称参数',
        'auth_user_ids_not_allowed_to_role' => '用户不允许加入到该角色',
        'auth_old_role_name_not_given' => '没有找到原角色名称参数',
        'auth_role_invalid' => '角色无效',
        'auth_old_role_not_found' => '原角色信息不存在',
        'auth_user_not_match_old_role' => '用户和角色不匹配',
        'category_id_not_given' => '没有找到分类ID参数',
        'category_not_found' => '没有找到分类信息',
        'category_desc_not_found' => '没有找到分类属性信息',
        'category_param_invalid' => '分类参数无效',
        'category_zh_param_invalid' => '中文分类参数无效',
        'category_en_param_invalid' => '英文分类参数无效',
        'category_zh_desc_not_found' => '没有找到中文分类属性信息',
        'category_en_desc_not_found' => '没有找到英文分类属性信息',
        'category_status_not_allow' => '分类为不可操作状态',
        'crowdsourcing_list_typeNoPermisstion' => '用户类型不允许',
        'crowdsourcing_create_nameParamNotFound' => '没有找到众包名称',
        'crowdsourcing_create_typeNotPermission' => '用户类型不允许',
        'crowdsourcing_update_crowdsourcingIdParamNotFound' => '没有找到众包id',
        'crowdsourcing_update_crowdsourcingIdNotSelf' => '不是自己的众包',
        'crowdsourcing_update_typeNotPermission' => '用户类型不允许',
        'crowdsourcing_update_crowdsourcingNotFound' => '没有找到众包信息',
        'crowdsourcing_users_crowdsourcingIdParamNotFound' => '没有找到众包id',
        'crowdsourcing_users_typeNotPermission' => '用户类型不允许',
        'crowdsourcing_users_crowdsourcingNotFound' => '没有找到众包信息',
        'crowdsourcing_userUpdate_userIdparamNotFound' => '没有找到用户ID',
        'crowdsourcing_userUpdate_roleParamNotFound' => '没有找到角色',
        'crowdsourcing_userUpdate_crowdsourcingIdParamNotFound' => '没有找到众包id',
        'crowdsourcing_userUpdate_crowdsourcingNotSelf' => '不是自己的众包',
        'crowdsourcing_userUpdate_typeNotPermission' => '用户类型不允许',
        'crowdsourcing_userUpdate_CrowdsourcingUserNotFound' => '没有找到众包成员',
        'crowdsourcing_userAdd_crowdsourcingIdParamNotFound' => '没有找到众包id',
        'crowdsourcing_userAdd_emailParamNotFound' => '没有找到邮箱',
        'crowdsourcing_userAdd_roleParamNotFound' => '没有找到角色',
        'crowdsourcing_userAdd_crowdsourcingNotFound' => '没有找到众包信息',
        'crowdsourcing_userAdd_userNotFound' => '没有找到用户信息',
        'crowdsourcing_userAdd_userCrowdsourcingExist' => '用户已有众包团队',
        'crowdsourcing_userAdd_typeNoPermission' => '用户类型不允许',
        'crowdsourcing_userAdd_roleNotRange' => '角色超出范围',
        'crowdsourcing_userDelete_crowdsourcingIdParamNotFound' => '没有找到众包id',
        'crowdsourcing_userDelete_userIdsParamNotFound' => '没有找到用户ID',
        'crowdsourcing_userDelete_crowdsourcingNotSelf' => '不是自己的众包',
        'crowdsourcing_userDelete_typeNoPermission' => '用户类型不允许',
        'crowdsourcing_userDelete_CrowdsourcingNotFound' => '没有找到众包信息',
        'crowdsourcing_detail_crowdsourcingIdParamNotFound' => '没有找到众包id',
        'crowdsourcing_detail_typeNoPermisstion' => '用户类型不允许',
        'crowdsourcing_detail_crowdsourcingNotFound' => '没有找到众包信息',
        'crowdsourcing_field_name' => '名称',
        'crowdsourcing_field_phone' => '电话',
        'crowdsourcing_field_status' => '状态',
        'crowdsourcing_field_address' => '地址',
        'crowdsourcing_field_domain' => '领域',
        'crowdsourcing_field_logo' => 'LOGO',
        'customer_email_existed' => '注册邮箱已被占用, 请更换其他邮箱',
        'customer_email_mustbe_company' => '请填写企业邮箱',
        'customer_id_not_given' => '没有找到客户ID参数',
        'customer_bus_not_found' => '商务负责人没有找到',
        'customer_not_found' => '没有找到客户详情',
        'customer_status_not_allow' => '客户状态不允许',
        'customer_user_is_other_customer' => '用户已是其他客户的人',
        'customer_user_type_not_customer' => '用户类型不是客户',
        'customer_type_param_invalid' => '类型不支持',
        'customer_created_from_param_invalid' => '来源不支持',
        'customer_not_match_manager' => '用户已是其他客户负责人',
        'customer_received' => '客户已被领取',
        'customer_user_id' => '没有找到联系人ID',
        'customer_user_not_found' => '没有找到客户联系人信息',
        'customer_user_is_customer_manager' => '客户负责人不能删除',
        'customer_user_not_business' => '用户不是商务负责人和协助人员',
        'user_not_business' => '未找到客户负责人',
        'customer_user_not_customer' => '客户联系人不存在',
        'customer_business_manager_id_not_given' => '商务负责人ID没有找到',
        'followup_id_not_given' => '没有找到事项ID',
        'followup_not_found' => '事项没有找到',
        'followup_user_not_found' => '事项负责人没有找到',
        'followup_customer_id_and_followup_id_not_given' => '没有找到客户ID和事项ID',
        'followup_field_name' => '项目名称',
        'followup_field_customer_id' => '所属客户',
        'followup_field_status' => '项目状态',
        'message_date_param_invalid' => '日期参数无效',
        'message_not_given' => '没有找到信息参数',
        'message_not_found' => '没有找到信息',
        'message_id_not_given' => '缺少信息参数',
        'date_not_given' => '缺少日期参数',
        'money_userWithdrawal_WithdrawalsHasExist' => '您的上一笔提现申请尚未完成审核，请耐心等待。审核完成后，您可再次提现',
        'money_userWithdrawal_numberHasRunOut' => '今日提现次数已用完，可在24:00之后再次提现',
        'money_userWithdrawalSubmit_withdrawalsHasExist' => '您的上一笔提现申请尚未完成审核，请耐心等待。审核完成后，您可再次提现',
        'money_userWithdrawalSubmit_numberHasRunOut' => '今日提现次数已用完，可在24:00之后再次提现',
        'money_userWithdrawalSubmit_moneyInsufficient' => '账户金额不足',
        'money_createPayment_paramsNotFound' => '参数错误',
        'money_createPayment_userNotFound' => '没有找到用户信息',
        'money_createPayment_projectNotFound' => '没有找到项目信息',
        'money_createPayment_projectdel' => '项目已删除',
        'notice_id_param_invalid' => '通知ID参数无效',
        'notice_not_found' => '没有找到通知信息',
        'feedback_field_content' => '反馈内容',
        'project_batch_not_found' => '没有找到批次信息',
        'project_category_id_not_given' => '缺少category_id参数',
        'project_category_not_found' => '没有找到分类信息',
        'project_not_found' => '没有找到项目信息',
        'project_id_not_given' => '缺少project_id参数',
        'project_name_not_given' => '缺少项目名称参数',
        'project_name_existed' => '项目名称已存在',
        'project_attribute_not_found' => '没有找到项目属性信息',
        'project_uploadfile_type_not_given' => '请选择数据的上传方式',
        'project_import_file_not_found' => '请上传数据文件',
        'project_attachment_not_found' => '请上传需求文件',
        'project_uploadfile_type_invalid' => '文件上传方式无效',
        'project_amount_invalid' => '作业总量无效',
        'project_status_not_allow' => '项目状态不允许',
        'project_status_not_allow_setting' => '项目正在准备中, 请稍后重试',
        'project_work_status_not_allow' => '项目工作状态不允许',
        'project_batch_setted' => '批次已配置',
        'project_assign_type_not_given' => '没有找到赋值类型',
        'project_paths_not_given' => '没有找到原始文件路径',
        'project_paths_not_json' => '原始文件路径不是json类型',
        'batch_count_too_few' => '批次数不能少于 %s',
        'project_batch_count_too_many' => '批次数不能超过 %s',
        'project_count_not_given' => '没有找到批次参数',
        'project_count_less_than_one' => '批次数小于1',
        'project_total_not_given' => '没有找到作业总量参数',
        'project_total_less_than_one' => '作业总量小于1',
        'project_batches_not_given' => '没有找到批次参数',
        'project_batches_not_json' => '批次数值不是json类型',
        'project_batches_param_error' => '批次参数错误',
        'project_tasks_param_error' => '任务参数错误',
        'project_file_path_not_exist' => '文件路径不存在',
        'project_struct_file_content_error' => '文件内容错误',
        'project_steps_not_given' => '没有找到工序参数',
        'project_step_not_found' => '没有找到工序信息',
        'project_tasks_not_given' => '没有找到任务参数',
        'project_tasks_not_found' => '没有找到任务',
        'project_task_platform_produce_or_audit_error' => '执行或审核的平台设置不正确',
        'project_task_platform_check_error' => '质检的平台设置不正确',
        'project_task_platform_acceptance_error' => '验收的平台设置不正确',
        'project_step_id_not_given' => '没有找到工序ID',
        'project_step_group_not_found' => '流程没有找到',
        'project_step_group_deleted' => '流程已删除',
        'project_step_group_id_not_given' => '流程ID参数没有找到',
        'project_step_config_incorrect' => '工序配置不正确',
        'project_stat_export_excessive' => '项目工序绩效导出次数过多，频率限制',
        'project_configs_not_json' => '参数configs不是正确的json格式',
        'project_time_not_start' => '未到项目开始时间',
        'project_time_ended' => '已过项目结束时间',
        'project_template_status_not_allowed' => '模板状态不允许',
        'project_category_template_not_match' => '项目类型与标注模板不匹配',
        'project_template_not_found' => '模板不存在',
        'resource_too_large' => '图片大小超过内存限制, 图片宽为%s高为%s, 图片路径为%s',
        'resource_parse_fail' => '图片解析失败, 图片路径为%s',
        'resource_not_exist' => '图片不存在, 图片路径为%s',
        'stepgroup_executetimes_fail' => '工作组的执行工作数不得超过1个, 暂不支持多人拟合.',
        'stepgroup_audittimes_fail' => '工作组的审核工作数不得超过1个, 暂不支持多人拟合.',
        'project_field_id' => 'ID',
        'project_field_type' => '类型',
        'project_field_status' => '项目状态',
        'project_field_start_time' => '开始时间',
        'project_field_end_time' => '截止时间',
        'project_field_name' => '项目名称',
        'project_field_internal_name' => '项目内部名称',
        'project_field_table_suffix' => '数据表后缀',
        'setting_not_found' => '没有找到数据信息',
        'setting_status_not_allow' => '当前系统设置已删除',
        'site_unpack_batch_config_empty' => '解包失败, 批次配置错误',
        'site_unpack_batch_config_fail' => '解包失败, 批次配置错误',
        'site_unpack_assign_type_fail' => '解包失败, 数据分配方式错误',
        'site_unpack_assign_paths_fail' => '解包失败, 分配路径信息错误',
        'site_unpack_assign_batches_fail' => '解包失败, 分配路径信息错误',
        'site_unpack_assign_count_fail' => '解包失败, 分配数量错误',
        'site_unpack_fail_vallid_file_not_found' => '解包失败, 没有找到有效文件',
        'site_unpack_status_not_allowed' => '解包状态不允许',
        'unpack_fail_type_not_supported' => '解包失败，暂不支持该类型文件',
        'unpack_sql_exception' => '数据解析失败，请检查上传文件，重新创建项目',
        'unpack_script_exception' => '数据解析失败，请重新创建项目或联系平台管理员',
        'label_unpack_succ_tip' => '成功解包 {count_success} 个文件, {count_fail} 个文件被忽视. {wrong_format} 为错误文件格式',
        'label_unpack_error_filePath_empty' => '文件路径为空',
        'label_unpack_error_extractpath_exist' => '解压目录已经存在',
        'label_unpack_error_mkdir_fail' => '创建目录失败',
        'label_unpack_error_zip_extractTo_fail' => '解压文件失败',
        'label_unpack_error_file_list_empty' => '读取文件列表失败',
        'label_unpack_error_data_datafile_fileempty' => '文件列表为空',
        'label_unpack_error_data_empty' => '结果格式错误',
        'site_upload_imgage_not_given' => '没有找到上传的图片',
        'site_upload_file_not_given' => '没有找到上传的文件',
        'site_upload_file_save_fail' => '上传文件保存失败',
        'site_page_not_found' => '页面没有找到',
        'site_save_path_not_exist' => '文件保存路径不存在',
        'site_save_file_exist' => '文件已存在',
        'site_file_path_decode_fail' => '参数(文件)错误',
        'site_file_not_given' => '文件参数没有找到',
        'site_not_exists' => '租户不存在',
        'site_auth_fail' => '用户没有登录',
        'site_id_not_given' => '租户ID参数没有找到',
        'site_team_disabled' => '团队已停用',
        'site_notassign_category' => '租户没有分配项目分类',
        'site_status_not_active' => '未激活',
        'site_status_active' => '已激活',
        'site_status_disabled' => '已禁用',
        'site_status_expired' => '已过期',
        'site_not_active' => '租户未激活',
        'site_name_existed' => '租户名字已存在',
        'time_is_not_correct' => '时间不正确',
        'site_field_name' => '租户名称',
        'site_field_logo' => 'LOGO',
        'site_field_start_time' => '授权开始时间',
        'site_field_end_time' => '授权结束时间',
        'site_field_contact_username' => '联系人',
        'site_field_contact_phone' => '联系电话',
        'site_field_contact_email' => '联系邮箱',
        'site_field_status' => '租户状态',
        'tag_name_not_given' => '没有找到标签名称参数',
        'tag_id_not_given' => '没有找到标签ID参数',
        'tag_not_found' => '没有找到标签信息',
        'task_id_not_given' => '任务ID参数没有找到',
        'task_not_found' => '任务没有找到, 或已过期(任务ID为:%s)',
        'task_not_all_effective' => '不能配置已过期或已删除任务(ID为:%s)',
        'task_exe_param_error' => '执行任务参数错误',
        'task_project_not_match' => '批次中不存在当前项目ID',
        'task_status_not_allow' => '任务状态不允许',
        'task_category_not_found' => '没有找到分类信息',
        'task_data_count_too_large' => '显示作业条数过多',
        'task_submit_data_empty' => '参数错误',
        'task_result_param_invalid' => '找不到结果参数或不是数组',
        'task_data_id_not_given' => '没有找到作业ID',
        'task_data_result_not_json' => '数据结果不是json',
        'task_data_not_exist' => '未找到作业信息',
        'task_work_not_exist' => '工作不存在',
        'task_work_status_not_allow' => '提交失败，作业状态不允许提交',
        'task_user_not_receive' => '提交失败, 您没有领取此作业',
        'task_data_not_received' => '提交失败, 数据没有被领取',
        'task_data_initializing' => '数据初始化中, 请稍后再试',
        'task_data_get_error' => '数据获取发生错误',
        'task_data_waitting' => '没有可执行作业',
        'task_exe_max_times' => '您已执行%s次, 已达到次数限制',
        'task_time_not_start' => '没到任务开始时间',
        'task_time_ended' => '已过任务结束时间',
        'task_execute_data_notAllow' => '此作业被管理员驳回或重置，已为您重新领取新作业',
        'task_execute_notopen' => '此功能未开放',
        'time_type_not_correct' => '时间类型参数不正确',
        'task_type_not_allow' => '工序类型不允许',
        'task_currect_workids_not_found' => '未指定正确的作业',
        'task_received_finished' => '作业已被领取完',
        'task_batch_status_not_allow' => '批次状态不允许',
        'task_submit_param_error' => '提交作业参数错误',
        'task_submit_feedback_toolong' => '驳回原因过长',
        'task_submit_data_invalid' => '提交的作业数据无效',
        'task_work_not_found' => '作业没有找到',
        'task_stat_not_found' => '统计信息没有找到',
        'task_cache_data_not_found' => '剩余作业被管理员驳回或重置，已为您重新领取新作业',
        'task_user_not_found' => '任务用户没有找到',
        'task_plat_not_team' => '任务平台不是团队',
        'task_plat_not_crowdsourcings' => '任务平台不是众包',
        'task_init_fail' => '任务初始化失败',
        'task_usercache_empty' => '您未领取此作业, 或因被管理员驳回或重置, 请查看操作记录',
        'task_dataid_notin_usercache' => '您未领取此作业, 或因被管理员驳回或重置, 请查看操作记录',
        'task_team_not_found' => '没有找到对应团队',
        'task_team_id_not_user_team' => '与当前用户的团队id不一致',
        'task_submit_categoryTypeNotExist' => '分类错误',
        'task_execute_forceRefuse_notAllow' => '此操作不可执行',
        'task_list_userNoPermission' => '没有权限执行此操作',
        'task_list_userNotJoinTeam' => '用户没有加入团队',
        'user_nopermission' => '用户没有权限',
        'task_list_userNotJoinCrowdsourcing' => '不是众包用户',
        'task_users_taskIdParamNotFound' => '缺少任务ID',
        'task_users_taskNotFound' => '未找到用户任务信息',
        'task_stat_notfound' => '没有找到任务绩效数据',
        'team_id_not_given' => '没有找到团队ID',
        'team_not_found' => '没有找到团队信息',
        'team_manager_id_not_number' => '管理员ID不是数字',
        'team_not_disabled' => '团队没有停用',
        'team_not_normal' => '团队状态不允许',
        'group_id_not_given' => '没有找到团队小组ID',
        'team_group_not_found' => '没有找到团队小组信息',
        'team_user_move_not_allowed' => '用户不可移动',
        'team_user_not_same_team' => '用户不属于同一个团队',
        'team_user_not_team_active' => '用户不是团队类型或未激活',
        'team_password_not_given' => '没有找到密码',
        'team_url_not_given' => '没有找到excel地址',
        'team_file_read_error' => '读取文件错误',
        'team_file_content_format_error' => '文件内容格式错误',
        'team_user_type_not_team' => '用户不是团队类型',
        'team_group_id_not_given' => '团队小组ID参数没有找到',
        'template_id_not_given' => '没有找到模板ID参数',
        'template_not_found' => '没有找到模板信息',
        'template_is_deleted' => '模板已删除，请联系项目负责人',
        'step_id_not_exits' => '没有找到工序ID',
        'data_pack_empty' => '没有找到打包数据',
        'batch_id_not_given' => '没有获取到批次id',
        'pack_id_not_given' => '缺少打包记录id参数',
        'pack_is_disable' => '打包记录已删除',
        'pack_is_disable_or_paused' => '打包记录已删除或已暂停',
        'pack_status_not_delete' => '打包状态不允许删除',
        'pack_status_not_allowed' => '打包状态不允许',
        'pack_not_found' => '未找到打包记录',
        'pack_deleted' => '打包记录已删除',
        'pack_task_exists' => '打包任务已存在',
        'complated_pack_cant_set_top' => '%s: 打包已完成，无法置顶',
        'dataset_id_not_found' => '缺少数据集参数',
        'deploy_name_not_given' => '缺少name参数',
        'deploy_upload_path_not_given' => '缺少upload_path参数',
        'deployment_id_not_given' => '缺少deploy_id参数',
        'deployment_not_found' => '未找到该数据部署数据',
        'deploy_path_not_given' => '缺少deploy_path参数',
        'deploy_file_empty' => '缺少部署文件，请先上传',
        'deployment_deleted' => '该条数据部署已删除',
        'deployment_existed' => '数据部署名称已存在',
        'deployment_user_no_permission' => '没有权限',
        'email_id_not_given' => '缺少id参数',
        'email_date_param_invalid' => 'date参数无效',
        'email_date_not_given' => '缺少date参数',
        'email_not_found' => '邮件不存在',
        'email_status_deleted' => '邮件已删除',
        'email_subject_template_not_found' => '邮件主题或模板不存在',
        'email_status_not_allowed' => '邮件状态不允许',
        'email_type_not_given' => '缺少type参数',
        'email_userid_not_given' => '缺少userid参数',
        'email_send_exception' => '邮件发送异常',
        'email_type_error' => '邮件类型错误',
        'delivery_fetch_amount_not_given' => '缺少领取数量参数',
        'delivery_id_not_given' => '缺少质检任务ID参数',
        'delivery_review_rate_not_given' => '缺少质检比例参数',
        'delivery_not_found' => '质检任务不存在',
        'delivery_step_id_not_given' => '缺少工序参数',
        'delivery_no_data' => '没有质检数据',
        'delivery_data_id_incorrect' => '作业ID不正确',
        'delivery_attribute_not_found' => '质检条件没有找到',
        'delivery_review_type_order' => '顺序质检',
        'delivery_review_type_random' => '随机质检',
        'thirdparty_not_found' => '第三方不存在',
        'thirdparty_userid_not_given' => '缺少第三方用户ID参数',
        'thirdparty_user_not_found' => '第三方用户不存在',
        'thirdparty_user_field_id' => '用户ID',
        'thirdparty_user_field_nickname' => '用户昵称',
        'thirdparty_user_field_avatar' => '用户头像',
        'thirdparty_nickname_forbidden' => '用户昵称含有敏感词',
        'thirdparty_nickname_format_error' => '昵称长度不得超过10个中文字符',
        'thirdparty_appkey_not_given' => '缺少第三方appkey参数',
        'thirdparty_appkey_invalid' => '第三方appkey无效',
        'thirdparty_sites_not_configured' => '第三方租户没有配置',
        'thirdparty_site_invalid' => '第三方租户无效',
        'thirdparty_fetch_no_user' => '未拉取到第三方用户'
    );

}