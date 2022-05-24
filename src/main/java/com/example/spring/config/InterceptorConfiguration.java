package com.example.spring.config;

import com.example.spring.interceptor.UploadInterceptor;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;
import org.springframework.web.servlet.config.annotation.InterceptorRegistry;
import org.springframework.web.servlet.config.annotation.WebMvcConfigurer;

@Configuration
public class InterceptorConfiguration implements WebMvcConfigurer {

    @Bean
    public UploadInterceptor uploadInterceptor() {
        return  new UploadInterceptor();
    }

    @Override
    public void addInterceptors(InterceptorRegistry registry) {
        // 注册拦截器
        registry.addInterceptor(uploadInterceptor())
                .addPathPatterns("/upload");
        WebMvcConfigurer.super.addInterceptors(registry);
    }
}
