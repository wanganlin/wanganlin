package com.example.spring.scheduler;

import lombok.extern.slf4j.Slf4j;
import org.springframework.context.annotation.Configuration;
import org.springframework.scheduling.annotation.EnableScheduling;
import org.springframework.scheduling.annotation.Scheduled;

import java.time.LocalDateTime;

@Configuration     // 1.标记 bean
@EnableScheduling  // 2.启用调度器
@Slf4j
public class MyScheduler {

    // 3. 添加调度任务
    @Scheduled(cron = "*/59 * * * * *")
    public void testLog() {
        log.warn("当前任务执行时间："+ LocalDateTime.now());
    }
}
