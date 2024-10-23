package com.example.WebTeam.Controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;

@Controller //Chi dinh HomeController la controller
public class HomeController {
    //Khi user truy cap vao endpoint thi homepage dc goi
    @GetMapping("/")
    public String home() {
        return "index";
    }
}
