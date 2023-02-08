package com.example.spring.aspect;

import lombok.extern.slf4j.Slf4j;
import org.aspectj.lang.ProceedingJoinPoint;
import org.aspectj.lang.annotation.Around;
import org.aspectj.lang.annotation.Aspect;

@Aspect
@Slf4j
public class ServiceLogAspect {
    /**
     * AOP的通知类型
     * 1. 前置通知
     * 2. 后置通知
     * 3. 环绕通知
     * 4. 异常通知
     * 5. 最终通知
     */

    @Around("execution(* com.example.spring.service.impl..*.*(..))")
    public Object serviceTimeLog(ProceedingJoinPoint joinPoint) throws Throwable {
        log.info("正在执行{}: {}",
                joinPoint.getTarget().getClass(),
                joinPoint.getSignature().getName());

        long startTime = System.currentTimeMillis();

        Object result = joinPoint.proceed();

        long endTime = System.currentTimeMillis();

        long interval = endTime - startTime;

        if (interval >= 3000) {
            log.error("当前执行耗时：{}", interval);
        } else if (interval >= 2000) {
            log.warn("当前执行耗时：{}", interval);
        } else {
            log.info("当前执行耗时：{}", interval);
        }

        return result;
    }
}
