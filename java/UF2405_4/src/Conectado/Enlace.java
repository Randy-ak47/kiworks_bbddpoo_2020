/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Conectado;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.SQLException;

/**
 *
 * @author Randy
 */
public class Enlace {
    private final String url = "jdbc:mysql://localhost/zoo";
    PreparedStatement psPrepararSentencia;
    Connection con = null;

    public Enlace() {
        try {
            Class.forName("com.mysql.cj.jdbc.Driver");
            con = DriverManager.getConnection(url, "root", "");
            if (con != null) {
                System.out.println("Conexión a base de datos correcta");

            }
        } catch (SQLException | ClassNotFoundException e) {
            System.out.println(e);
        }
    }
    public Connection conectado() {
        return con;
    }

    public void desconectar() {
        con = null;
        System.out.println("La conexión la BD se cerrado");
    }

}
