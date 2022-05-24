package com.example.spring.request;

import lombok.Data;
import org.aopalliance.intercept.Interceptor;

import javax.validation.constraints.NotBlank;
import javax.validation.constraints.NotEmpty;
import javax.validation.constraints.NotNull;

/**
 * 1 @NotEmpty :不能为null，且Size>0
 * 2 @NotNull:不能为null，但可以为empty,没有Size的约束
 * 3 @NotBlank:只用于String,不能为null且trim()之后size>0
 */
@Data
public class UserRequest {

    @NotBlank
    private String name;

    @NotBlank
    private String avatar;

    @NotNull
    private Integer sex;

}
