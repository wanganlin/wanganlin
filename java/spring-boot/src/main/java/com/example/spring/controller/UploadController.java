package com.example.spring.controller;

import com.example.spring.support.JSONResponse;
import lombok.extern.slf4j.Slf4j;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RestController;
import org.springframework.web.multipart.MultipartFile;

import java.io.File;
import java.io.IOException;

@Slf4j
@RestController
public class UploadController {

    /**
     * http://127.0.0.1:8080/upload
     * Body 类型 : multipart/form-data
     * upload : 文件
     * @param upload
     * @return
     * @throws IOException
     */
    @PostMapping("upload")
    public JSONResponse index(MultipartFile upload) throws IOException {
        File file = new File("/tmp/" + upload.getOriginalFilename());
        upload.transferTo(file);
        return JSONResponse.success(file.toString());
    }

    /**
     * http://127.0.0.1:8080/upload/multi
     * Body 类型 : multipart/form-data
     * upload : 文件1
     * upload : 文件2
     * @param upload
     * @return
     * @throws IOException
     */
    @PostMapping("upload/multi")
    public JSONResponse multi(MultipartFile[] upload) throws IOException {
        for (int i = 0; i < upload.length; i++) {
            File file = new File("/tmp/" + upload[i].getOriginalFilename());
            upload[i].transferTo(file);
        }
        return JSONResponse.success("ok");
    }
}
