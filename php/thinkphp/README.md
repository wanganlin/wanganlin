# 📊 PHPCMS

一个**企业级内容管理系统(CMS)脚手架**,以下是详细介绍:

---

### 🎯 **一、项目定位**
- **项目名称**: PHPCMS
- **类型**: 基于ThinkPHP框架的内容管理系统脚手架
- **定位**: 快速开发内容管理类应用的企业级基础框架
- **特点**: 前后端分离、模块化设计、RBAC权限控制

---

### 🏗️ **二、技术架构**

#### **核心技术栈**
- **框架**: ThinkPHP 8.1
- **PHP版本**: 8.4+
- **ORM**: Think-ORM 4.0
- **运行环境**: Swoole + Docker (基于hyperf/hyperf:8.4-alpine镜像)
- **数据库**: MySQL
- **认证**: Firebase JWT
- **API文档**: OpenAPI 3.0 (Swagger)

#### **集成服务**
- **云存储**: 阿里云OSS、七牛云、腾讯云COS
- **搜索引擎**: Elasticsearch 8.19
- **消息队列**: Think-Queue (支持Redis/Database)
- **定时任务**: Workerman Crontab
- **即时通讯**: Gateway-Worker
- **微信生态**: EasyWeChat 6.19
- **支付**: YansongdaPay 3.7
- **短信**: OverTrue EasySMS

---

### 📁 **三、目录结构分析**

#### **核心目录**

```
app/
├── api/              # API接口层 (4个模块)
│   ├── admin/        # 后台管理API
│   ├── common/       # 公共API
│   ├── portal/       # 门户API
│   └── user/         # 用户API
├── bundles/          # 业务模块包
│   ├── system/       # 系统管理模块
│   └── user/         # 用户模块
├── command/          # 命令行工具
├── constant/         # 常量定义
├── contract/         # 契约接口
├── controller/       # 基础控制器
├── exception/        # 异常处理
├── jobs/             # 队列任务
├── logic/            # 业务逻辑层
├── manager/          # 第三方服务管理
│   ├── dingtalk/     # 钉钉集成
│   └── wechat/       # 微信集成
├── middleware/       # 中间件
├── plugins/          # 插件系统
└── support/          # 辅助工具
```


---

### 🔐 **四、权限系统 (RBAC)**

#### **数据表设计**
项目实现了完整的RBAC权限模型:

| 表名 | 说明 |
|------|------|
| `system_admin` | 系统管理员表 |
| `system_role` | 角色表 |
| `system_permission` | 权限表 |
| `system_admin_role` | 管理员-角色关联表 |
| `system_role_permission` | 角色-权限关联表 |
| `system_menu` | 菜单表 |
| `user` | 用户表 |

#### **中间件**
- [`Authenticate`](D:\code\git\phpcms\app\middleware\Authenticate.php): JWT令牌认证
- [`Authorization`](D:\code\git\phpcms\app\middleware\Authorization.php): 权限授权 (待实现)

---

### 🌐 **五、API架构**

#### **模块划分**
项目采用**多应用模式**,API分为4个独立模块:

| 模块 | 路由前缀 | 说明 | 认证要求 |
|------|---------|------|---------|
| Admin | `/api/admin` | 后台管理接口 | 需要JWT + 权限验证 |
| User | `/api/user` | 用户端接口 | 需要JWT |
| Portal | `/api/portal` | 门户公开接口 | 无需认证 |
| Common | `/api/common` | 公共服务接口 | 无需认证 |

#### **RESTful接口规范**
所有CRUD接口遵循统一模式:
- `POST /{resource}/query` - 查询列表
- `POST /{resource}/create` - 创建资源
- `GET /{resource}/show` - 获取详情
- `PUT /{resource}/update` - 更新资源
- `DELETE /{resource}/destroy` - 删除资源

#### **已实现的API模块**
- ✅ 认证模块: 登录/忘记密码/重置密码
- ✅ 系统管理员管理
- ✅ 角色管理
- ✅ 权限管理
- ✅ 菜单管理
- ✅ 用户管理
- ✅ 验证码服务
- ✅ 短信服务

---

### 🔧 **六、核心功能特性**

#### **1. 代码生成器**
脚本: [`scripts/include/code_gen.sh`](D:\code\git\phpcms\scripts\include\code_gen.sh)

自动生成代码:
```bash
php artisan gen:entity      # 生成实体类
php artisan gen:model       # 生成模型
php artisan gen:dao         # 生成数据访问层
php artisan gen:service     # 生成服务层
php artisan gen:controller  # 生成控制器
php artisan gen:route       # 生成路由
```


#### **2. Bundle模块化**
采用**Bundle模式**组织业务代码:
```
bundles/系统模块/
├── controller/   # 控制器
├── entity/       # 实体
├── model/        # 模型
├── repository/   # 仓储
├── request/      # 请求验证
├── response/     # 响应DTO
├── route/        # 路由
└── service/      # 服务层
```


#### **3. 分层架构**
```
Controller → Service → Repository → Model
     ↓          ↓           ↓
  Request   Business    Data Access
  Response   Logic      Layer
```


#### **4. OpenAPI文档**
自动生成4套API文档:
- [`public/docs/openapi/admin.json`](D:\code\git\phpcms\public\docs\openapi\admin.json) - 管理后台
- [`public/docs/openapi/user.json`](D:\code\git\phpcms\public\docs\openapi\user.json) - 用户端
- [`public/docs/openapi/common.json`](D:\code\git\phpcms\public\docs\openapi\common.json) - 公共接口
- `public/docs/openapi/portal.json` - 门户接口

---

### 🚀 **七、部署与运行**

#### **Docker部署**
```bash
docker build -t phpcms .
docker run -d --name phpcms -p 8001:8000 phpcms
```


#### **配置说明**
- 镜像: `hyperf/hyperf:8.4-alpine-v3.22-swoole`
- 端口: 8000 (容器) → 8001 (宿主机)
- 时区: Asia/Shanghai
- 内存限制: 1G
- 启动命令: `php artisan swoole`

#### **初始化流程**
```bash
composer setup  # 自动执行:
# 1. composer install
# 2. 复制.env配置
# 3. 运行数据库迁移
# 4. npm install & build
```


---

### 📊 **八、数据库设计**

#### **迁移文件**
项目包含7个数据表迁移:
1. [20251023000001_create_user_table.php](file://D:\code\git\phpcms\database\migrations\20251023000001_create_user_table.php) - 用户表
2. [20251023090000_create_system_admin_table.php](file://D:\code\git\phpcms\database\migrations\20251023090000_create_system_admin_table.php) - 管理员表
3. [20251023090001_create_system_admin_role_table.php](file://D:\code\git\phpcms\database\migrations\20251023090001_create_system_admin_role_table.php) - 管理员角色关联
4. [20251023090002_create_system_role_table.php](file://D:\code\git\phpcms\database\migrations\20251023090002_create_system_role_table.php) - 角色表
5. [20251023090003_create_system_role_permission_table.php](file://D:\code\git\phpcms\database\migrations\20251023090003_create_system_role_permission_table.php) - 角色权限关联
6. [20251023090004_create_system_permission_table.php](file://D:\code\git\phpcms\database\migrations\20251023090004_create_system_permission_table.php) - 权限表
7. [20251023090005_create_system_menu_table.php](file://D:\code\git\phpcms\database\migrations\20251023090005_create_system_menu_table.php) - 菜单表

#### **数据特性**
- ✅ 软删除支持 (`deleted`, `deleted_time`)
- ✅ 自动时间戳 (`created_time`, `updated_time`)
- ✅ 索引优化 (唯一索引、普通索引)
- ✅ 字段注释完善

---

### 🔍 **九、优势与特色**

#### **优势**
1. **代码自动化**: 完整的代码生成工具链
2. **模块化设计**: Bundle模式,业务隔离清晰
3. **标准化接口**: RESTful + OpenAPI规范
4. **企业级功能**: RBAC、云存储、队列、定时任务等开箱即用
5. **高性能**: Swoole常驻内存,性能优异
6. **前后端分离**: 提供多套独立API

#### **适用场景**
- ✅ 企业内容管理系统
- ✅ 后台管理系统
- ✅ SaaS多租户平台
- ✅ API服务平台
- ✅ 微信/钉钉应用

---

### ⚠️ **十、待完善部分**

1. **授权中间件**: [`Authorization`](D:\code\git\phpcms\app\middleware\Authorization.php) 仅占位,未实现具体权限验证
2. **登录逻辑**: [`SystemAdminService::login()`](D:\code\git\phpcms\app\logic\SystemAdminService.php) 仅返回true,未实现真实验证
3. **数据填充**: [`DatabaseSeeder`](D:\code\git\phpcms\database\seeds\DatabaseSeeder.php) 为空,缺少测试数据
4. **单元测试**: 未见测试代码
5. **前端应用**: resource/apps下有admin/mobile/user三个应用框架,但未完全实现

---

### 📝 **十一、总结**

这是一个**架构完善、设计规范**的企业级CMS脚手架项目,具备:
- ✅ 清晰的分层架构
- ✅ 完整的RBAC权限体系
- ✅ 丰富的第三方集成
- ✅ 自动化代码生成
- ✅ 前后端分离设计
- ✅ Docker容器化部署

适合作为**企业级应用开发的基础框架**,可快速扩展业务功能。主要需要补充权限验证逻辑和测试代码即可投入生产使用。
