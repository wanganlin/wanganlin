# LIMS 数据表分析

## MySQL 导出

```
select table_name 表名,TABLE_COMMENT 表注释 from INFORMATION_SCHEMA.TABLES Where table_schema = 'lims';
```

## 客户
- customer	客户管理(分包商)
- customer_address	客户地址表
- customer_contact_person	客户联系人表
- customer_evaluate	客户管理(分包商)评价
- customer_monitoring_index	分包商因子表
- customer_report	客户报告表


## 合同
- contract	合同信息主表
- contract_audit_log	合同审核日志表
- contract_business_and_amount	合同业务与金额
- contract_business_and_amount_process_log	业务进度日志表
- contract_deduction	合同抵扣
- contract_payment	合同回款记录
- contract_process_log	
- contract_review_config	合同审核人配置

- contract_subcontract	合同分包
- contract_subcontract_payment_record	合同分包预付款记录
- contract_subcontract_process_log	分包进度日志表


## 业务
- business_involved	涉及业务表
- monitoring_type	监测类型表
- monitoring_index	监测指标
- monitoring_index_container	监测指标容器表
- monitoring_index_detection_limit	监测指标检出限表
- monitoring_index_group	指标组


## 项目
- project	项目信息表
- project_analysis_state	
- project_edit	待修改项目信息表
- project_edit_log	待修改项目修改日志暂存表
- project_edit_process_log	待修改项目审核进度日志表
- project_method_factor	项目方法因子表
- project_method_factor_edit	项目方法因子表
- project_monitoring_index_subcontractor	项目分包因子安排分包商
- project_monitoring_index_subcontractor_edit	项目分包因子安排分包商
- project_process_log	项目审核进度日志表

- project_sample_evaluation_limit	项目样品的指标对应的评价限值
- project_sample_evaluation_limit_edit	项目样品的指标对应的评价限值
- project_sample_monitoring_index	送样对应指标表
- project_sample_monitoring_index_edit	送样对应指标表
- project_sampling_monitoring_index	采样点位对应指标表
- project_sampling_monitoring_index_edit	采样点位对应指标表
- project_sampling_point	项目采样点位信息表
- project_sampling_point_edit	项目采样点位信息表
- project_sampling_point_equivalence	项目采样点位等效组列表
- project_sampling_point_equivalence_edit	待修改项目采样点位等效组列表
- project_work_situation	项目的工况信息表
- project_work_situation_image	项目的工况信息表的图片


## 质控
- quality_control	质量控制表
- quality_control_process_log	质控审核进度日志表
- quality_control_standard	质控标准表


## 采样
- sampling_automatic_result	采样自动出结果的记录表
- sampling_flow_calibration_equipment	采样流量校准所用设备表
- sampling_flow_calibration_record	采样流量校准记录
- sampling_signature_record	采样单签名记录表
- sampling_task	采样任务表
- sampling_task_attachment	采样任务附件资源表
- sampling_task_record	采样任务采样单表
- ready_process_log	准备进度日志表


## 样品
- sampling_info	采样样品信息表
- project_sample_delivery	项目送样信息表
- project_sample_delivery_edit	项目送样信息表


## 分析
- curve	曲线表
- curve_info	曲线因子数据表
- lab_analysis	实验室分析样品分配以及领用列表
- lab_analysis_summary	分析单/外包单汇总列表
- lab_analysis_summary_backup	分析单修改记录备份表
- lab_analysis_summary_log	分析单/外包单汇总日志
- lab_analysis_summary_relation_excel_table	分析汇总单关联excel记录表
- lab_analysis_summary_resource	外包单附件列表
- lab_analysis_summary_sample	分析单汇总样品
- lab_analysis_summary_sample_log	分析单汇总样品
- apply_lab_analysis_log	分析任务作废申请日志表
- pretreatment_process	前处理过程表


## 报告
- report	报告编制生成表
- report_attachment	检测报告附件表
- report_concentration	检测报告浓度表
- report_curve	检测报告曲线表
- report_process_log	报告审核进入日志
- report_resources	报告附件表


## 经销商
- distributor	经销商
- distributor_contact_person	经销商联系人表


## 仪器
- equipment	设备仪器表
- equipment_calibration_record	仪器校准记录
- equipment_log	设备领用归还记录表
- equipment_maintenance_record	设备保养记录表
- equipment_receive_record	设备领用记录
- equipment_usage_record	仪器设备使用记录
- equipment_verification_record	设备检定记录表


## 试剂
- reagent	试剂表
- reagent_config_fluid	配置液表
- reagent_config_fluid_character	个人配置液特性表
- reagent_depository	试剂仓库
- reagent_depository_character	标准溶液特性表
- reagent_log	试剂使用日志
- reagent_name	试剂品名(名称)
- reagent_share	试剂共享


## 物料
- materiel	物料表


## 财务
- invoice_application	发票申请
- invoice_application_process_log	发票申请进度日志表
- invoice_review_config	发票审核人配置
- pay_application	支付申请
- pay_application_process_log	支付申请进度日志表
- payment_review_config	支付审核人配置


## 文件
- resource	
- resource_file	文件资源
- resource_type	资源文件类型


## 员工
- user
- role
- permission
- user_role_relation
- role_privilege_relation
- user_login_log
- user_operate_log
- workload_and_rollback_record	工作量和回退记录表


## 监管平台
- platform_entrusting_party	监管平台(委托方列表)

## 实验室
- company
- department
- option_setting	选项设置表
- review_config	审核配置


## 标准
- qualification_template	能力资质模板表
- technical_standard	技术标准表
- evaluation_limit	评价限值库表
- evaluation_standard	评价标准


## 采样记录单

### 生活饮用水
- automatic_drinking_water_sampling_record	(直读)生活饮用水采样原始记录表
- automatic_drinking_water_sampling_record_sampling	(直读)生活饮用水采样原始记录表样品
- drinking_water_point_frequency_record	生活饮用水点位频次记录表
- drinking_water_point_frequency_record_frequency	生活饮用水点位频次记录表样品
- drinking_water_sampling_record	生活饮用水采样原始记录表
- drinking_water_sampling_record_sampling	生活饮用水采样原始记录表样品

### 地表水
- automatic_surface_water_sampling_record	（直读）地表水采样原始记录表
- automatic_surface_water_sampling_record_sampling	（直读）地表水采样原始记录表样品
- surface_water_point_frequency_record	地表水点位频次记录表
- surface_water_point_frequency_record_frequency	地表水点位频次记录表样品
- surface_water_sampling_record	地表水采样原始记录表
- surface_water_sampling_record_sampling	地表水采样原始记录表样品

### 地下水
- automatic_ground_water_sampling_record	（直读）地下水采样原始记录表
- automatic_ground_water_sampling_record_sampling	（直读）地下水采样原始记录表样品
- ground_water_point_frequency_record	地下水点位频次记录表
- ground_water_point_frequency_record_frequency	地下水点位频次记录表样品
- ground_water_sampling_record	地下水采样原始记录表
- ground_water_sampling_record_sampling	地下水采样原始记录表样品

### 废水
- automatic_waste_water_record	（直读）废水采样原始记录表
- automatic_waste_water_record_sampling	（直读）废水采样原始记录表样品
- waste_water_point_frequency_record	废水点位频次记录表
- waste_water_point_frequency_record_frequency	废水点位频次记录表样品
- waste_water_record	废水采样单记录表
- waste_water_record_sampling	废水采样单记录表样品

### 有组织废气
- automatic_organized_sampling_record	(直读)有组织废气采样记录表
- automatic_organized_sampling_record_sampling	(直读)有组织采样记录表样品
- organized_point_frequency_record	有组织点位频次记录表
- organized_point_frequency_record_sampling	有组织点位频次记录表样品
- organized_sampling_record	有组织采样记录表
- organized_sampling_record_sampling	有组织采样记录表样品

### 无组织废气
- unorganized_waste_gas_point_frequency_record	无组织废气点位频次记录表
- unorganized_waste_gas_point_frequency_record_frequency	无组织废气点位频次记录样品表
- unorganized_waste_gas_record	无组织废气采样原始记录表
- unorganized_waste_gas_record_sampling	无组织废气采样原始记录样品表

### 炉窑
- furnaces_point_frequency_record	炉窑点位频次记录表
- furnaces_point_frequency_record_frequency	炉窑点位频次记录表频次信息

### 锅炉
- boiler_point_frequency_record	锅炉点位频次记录表
- boiler_point_frequency_record_frequency	锅炉点位频次记录表频次信息

### 自动烟气
- automatic_root_original_record	自动烟气采样原始记录表
- automatic_root_original_record_sampling	自动烟气采样原始记录样品表
- industr_enterp_social_life_noise_scene_original_record_sampling	自动烟气采样原始记录样品表
- smoke_sampling_record_sampling	自动烟气采样原始记录样品表

### 烟气分析
- smoke_sampling_record	烟气采样记录表
- smoke_analysis_survey_record	烟气分析测量记录表
- smoke_analysis_survey_record_sampling	烟气分析测量记录样品表

### 烟气黑度
- smoke_blackness_original_record	烟气黑度原始记录表
- smoke_blackness_original_record_time	烟气黑度原始记录表

### 噪声
- industr_enterp_social_life_noise_scene_original_record	工业企业厂界噪声/社会生活环境噪声现场检测原始记录表

### 土壤
- soil_sampling_record	土壤采样原始记录表
- soil_sampling_record_sampling	土壤采样原始记录表样品


## 分析记录单



## 仪器校准单



## 其他
- record_sheet_image	记录单对应的附件信息
- record_sheet_template	各个企业分配记录表
- excel_bind_controlled_table	excel绑定受控编号表
- sample_bind_controlled_table	样品单受控表

	
