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

    @PostMapping("upload")
    public JSONResponse index(MultipartFile upload) throws IOException {
        File file = new File("/tmp/" + upload.getOriginalFilename());
        upload.transferTo(file);
        return JSONResponse.success(file.toString());
    }
}
