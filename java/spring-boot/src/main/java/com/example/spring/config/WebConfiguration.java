package com.example.spring.config;

import lombok.Data;
import org.springframework.boot.context.properties.ConfigurationProperties;
import org.springframework.context.annotation.PropertySource;
import org.springframework.stereotype.Component;

@Data
@Component
@PropertySource(value = "classpath:application.properties", encoding = "utf-8")
@ConfigurationProperties(prefix = "config")
public class WebConfiguration {

    private String name;
    private Integer age;
    private String sex;
}
