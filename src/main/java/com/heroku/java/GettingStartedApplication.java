package com.heroku.java;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.context.annotation.Bean;
// import org.springframework.security.crypto.bcrypt.BCryptPasswordEncoder;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PostMapping;



import javax.sql.DataSource;
import java.sql.Connection;
import java.util.ArrayList;
import java.util.Map;

// import org.jscience.physics.amount.Amount;
// import org.jscience.physics.model.RelativisticModel;
// import javax.measure.unit.SI;

@SpringBootApplication
@Controller
public class GettingStartedApplication {
    private final DataSource dataSource;

    @Autowired
    public GettingStartedApplication(DataSource dataSource) {
        this.dataSource = dataSource;
    }

    @GetMapping("/")
    public String index() {
        return "index";
    }

    @GetMapping("/AdminSignIn")
    public String adminsignin() {
        return "sign-in/AdminSignIn";
    }

     @GetMapping("/signInCoordinator")
    public String coorsignin() {
        return "sign-in/signInCoordinator";
    }

     @GetMapping("/signin")
    public String studentsignin() {
        return "sign-in/signin";
    }

    @GetMapping("/signup")
    public String about() {
        return "sign-in/signup";
    }

     @GetMapping("/reminder")
    public String reminder() {
        return "sign-in/reminder";
    }

    @GetMapping("/dashboardStudent")
    public String dashboardstudent(){
        return "dashboard/dashboardStudent";
    }

     @GetMapping("/edit_profile")
    public String profileStudent(){
        return "profileStud/edit_profile";
    }

       @GetMapping("/semasa")
    public String semasa(){
        return "kokurikulum/semasa";
    }

        @GetMapping("/pendaftaran")
    public String registration(){
        return "kokurikulum/pendaftaran";
    }

         @GetMapping("/semakan")
    public String resultcheck(){
        return "kokurikulum/semakan";
    }

          @GetMapping("/info_kelab")
    public String info_kelab(){
        return "info_cat/info_kelab";
    }

           @GetMapping("/info_sukan")
    public String info_sukan(){
        return "info_cat/info_sukan";
    }

           @GetMapping("/info_unit")
    public String info_unit(){
        return "info_cat/info_unit";
    }

            @GetMapping("/dashboardCoor")
    public String dashboardCoor(){
        return "dashboard/dashboardCoor";
    }

         @GetMapping("/profileCoordinatorEdit")
    public String profileCoordinatorEdit(){
        return "profil/profileCoordinatorEdit";
    }

            @GetMapping("/info_unitCoor")
    public String info_unitCoor(){
        return "info_cat/info_unitCoor";
    }

            @GetMapping("/info_sukanCoor")
    public String info_sukanCoor(){
        return "info_cat/info_sukanCoor";
    }

            @GetMapping("/info_kelabCoor")
    public String info_kelabCoor(){
        return "info_cat/info_kelabCoor";
    }
  
  


    @GetMapping("/database")
    String database(Map<String, Object> model) {
        try (Connection connection = dataSource.getConnection()) {
            final var statement = connection.createStatement();
            statement.executeUpdate("CREATE TABLE IF NOT EXISTS ticks (tick timestamp)");
            statement.executeUpdate("INSERT INTO ticks VALUES (now())");

            final var resultSet = statement.executeQuery("SELECT tick FROM ticks");
            final var output = new ArrayList<>();
            while (resultSet.next()) {
                output.add("Read from DB: " + resultSet.getTimestamp("tick"));
            }

            model.put("records", output);
            return "database";

        } catch (Throwable t) {
            model.put("message", t.getMessage());
            return "error";
        }
    }

    //run application
    public static void main(String[] args) {
        SpringApplication.run(GettingStartedApplication.class, args);
    }
}
