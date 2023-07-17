<?php
/**
 *
 * @author Eugénio Chimuco
 */
interface IUsuarioRepository {
   public function createUsuario($email, $tipo, $senha);
}
