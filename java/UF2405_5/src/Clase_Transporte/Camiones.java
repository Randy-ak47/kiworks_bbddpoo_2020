/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Clase_Transporte;

import Conectado_Transporte.Enlace_Transporte;
import Formularios.Choferes;


/**
 *
 * @author Randy
 */
public class Camiones {

    public static void main(String[] args) {
        Enlace_Transporte con = new Enlace_Transporte();
        con.conectado();
        Choferes miformulario = new Choferes();
        miformulario.setVisible(true);
        
        //con.desconectar();
    }
}
