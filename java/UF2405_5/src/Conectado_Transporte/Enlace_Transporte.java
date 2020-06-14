/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Conectado_Transporte;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import javax.swing.JOptionPane;

/**
 *
 * @author Randy
 */
public class Enlace_Transporte {

    private final String url = "jdbc:mysql://localhost/transportes_2";
    PreparedStatement psPrepararSentencia;
    Connection con = null;

    public Enlace_Transporte() {
        try {
            Class.forName("com.mysql.cj.jdbc.Driver");
            con = DriverManager.getConnection(url, "root", "");
            if (con != null) {
                //JOptionPane.showMessageDialog(null,"Conexión a base de datos correcta");
                System.out.println("Conexión a base de datos correcta");

            }
        } catch (SQLException | ClassNotFoundException e) {
            JOptionPane.showMessageDialog(null,"Error de conexión "+e.getMessage());
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
