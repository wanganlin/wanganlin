// 条件编译特性
#[cfg(target_os = "macos")]
fn platform_specific() {
    println!("Running on macOS");
}

#[cfg(target_os = "linux")]
fn platform_specific() {
    println!("Running on Linux");
}

// 自定义特性标志
#[cfg(feature = "my_feature")]
fn feature_specific() {
    println!("Custom feature is enabled");
}

// 特性门控
#![feature(core_intrinsics)]

fn main() {
    // 条件编译
    platform_specific();
    
    // 自定义特性
    #[cfg(feature = "my_feature")]
    feature_specific();
    
    // 不稳定特性
    unsafe {
        let x = std::intrinsics::sqrtf64(9.0);
        println!("Square root: {}", x);
    }
}