package com.example.spring.support;

import lombok.AllArgsConstructor;
import lombok.Data;

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
}
