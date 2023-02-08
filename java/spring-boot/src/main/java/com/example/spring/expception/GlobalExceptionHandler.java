package com.example.spring.expception;

import com.example.spring.support.JSONResponse;
import org.apache.tomcat.util.http.fileupload.impl.FileSizeLimitExceededException;
import org.springframework.web.bind.annotation.ControllerAdvice;
import org.springframework.web.bind.annotation.ExceptionHandler;
import org.springframework.web.bind.annotation.ResponseBody;

/**
 * 针对控制统计异常拦截处理
 */
@ControllerAdvice
public class GlobalExceptionHandler {

    @ExceptionHandler(FileSizeLimitExceededException.class)
    @ResponseBody
    public JSONResponse fileSizeException(FileSizeLimitExceededException e) {
        return JSONResponse.fail(40001, e.getMessage());
    }

    @ExceptionHandler(HandlerException.class)
    @ResponseBody
    public JSONResponse fileSizeException(HandlerException e) {
        return JSONResponse.fail(40001, e.getMessage());
    }
}
