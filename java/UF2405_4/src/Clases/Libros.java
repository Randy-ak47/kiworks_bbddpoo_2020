/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Clases;

import Conectado.Enlace;

/**
 *
 * @author Randy
 */
public class Libros {

    public static void main(String[] args) {
        Enlace con = new Enlace();
        con.conectado();
        con.desconectar();
    }
}
