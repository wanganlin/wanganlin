// 基本模块声明
mod basic {
    // 私有函数
    fn private_function() {
        println!("这是basic模块的私有函数");
    }

    // 公开函数
    pub fn public_function() {
        println!("这是basic模块的公开函数");
        private_function();
    }
}

// 模块层级结构
mod outer {
    pub mod inner {
        pub fn function() {
            println!("这是outer::inner模块的函数");
        }
    }
}

// 使用use关键字导入模块项
use outer::inner;

// 模块拆分到不同文件
mod split_module;

fn main() {
    // 调用basic模块的公开函数
    basic::public_function();

    // 调用层级模块的函数
    outer::inner::function();
    inner::function();

    // 调用拆分模块的函数
    split_module::split_function();
}