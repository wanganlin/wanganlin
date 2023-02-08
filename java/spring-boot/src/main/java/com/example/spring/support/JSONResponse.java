package com.example.spring.support;

import lombok.AllArgsConstructor;
import lombok.Data;
import org.springframework.validation.BindingResult;
import org.springframework.validation.FieldError;

import java.util.HashMap;

@Data
@AllArgsConstructor
public class JSONResponse {

    private Integer code;

    private String message;

    private Object data;

    public static JSONResponse success(Object data) {
        return new JSONResponse(200, "OK", data);
    }

    public static JSONResponse fail(Integer code, String message) {
        return new JSONResponse(code, message, null);
    }

    public static JSONResponse fail(BindingResult bindingResult) {
        HashMap<Object, Object> map = new HashMap<>();
        for (FieldError error : bindingResult.getFieldErrors()) {
            map.put(error.getField(), error.getDefaultMessage());
        }

        return new JSONResponse(40001, map.toString(), null);
    }
}
