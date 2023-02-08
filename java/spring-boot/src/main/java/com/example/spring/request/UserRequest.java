package com.example.spring.request;

import lombok.Data;
import org.aopalliance.intercept.Interceptor;
import org.hibernate.validator.constraints.Length;
import org.hibernate.validator.constraints.Range;

import javax.validation.constraints.*;
import java.util.List;

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

    @Min(value = 1, message = "学生的年纪最小为一年级")
    @Max(value = 6, message = "学生的年纪最大为六年级")
    private Integer grade;

    @Range(min = 1, max = 18, message = "学生所在班级区间为1-18")
    private Integer classRoom;

    @Size(min = 2, max = 5, message = "学生的技能最少2个，最多5个")
    private List<String> skill;

    @Length(min = 3, max = 8, message = "英文名的长度区间为3-8")
    private String englishName;

    @Email(message = "邮箱格式不正确")
    private String email;

}
