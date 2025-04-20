use tokio::time::{sleep, Duration};
use tokio::sync::mpsc;
use std::time::Instant;

#[tokio::main]
async fn main() {
    // 基本async/await
    let start = Instant::now();
    let result = async_function().await;
    println!("基本async/await结果: {}, 耗时: {:?}", result, start.elapsed());

    // 并发任务
    let task1 = tokio::spawn(async {
        sleep(Duration::from_secs(1)).await;
        "任务1完成"
    });
    
    let task2 = tokio::spawn(async {
        sleep(Duration::from_secs(2)).await;
        "任务2完成"
    });
    
    let (res1, res2) = tokio::join!(task1, task2);
    println!("并发任务结果: {:?}, {:?}", res1.unwrap(), res2.unwrap());

    // 通道通信
    let (tx, mut rx) = mpsc::channel(32);
    
    tokio::spawn(async move {
        for i in 0..3 {
            tx.send(i).await.unwrap();
            sleep(Duration::from_secs(1)).await;
        }
    });
    
    while let Some(msg) = rx.recv().await {
        println!("收到消息: {}", msg);
    }

    // Future trait实现
    let custom_future = CustomFuture::new();
    println!("自定义Future结果: {}", custom_future.await);
}

async fn async_function() -> String {
    sleep(Duration::from_secs(1)).await;
    "异步函数完成".to_string()
}

struct CustomFuture {
    ready: bool,
}

impl CustomFuture {
    fn new() -> Self {
        Self { ready: false }
    }
}

impl std::future::Future for CustomFuture {
    type Output = String;

    fn poll(
        mut self: std::pin::Pin<&mut Self>,
        cx: &mut std::task::Context<'_>,
    ) -> std::task::Poll<Self::Output> {
        if self.ready {
            std::task::Poll::Ready("自定义Future完成".to_string())
        } else {
            self.ready = true;
            cx.waker().wake_by_ref();
            std::task::Poll::Pending
        }
    }
}