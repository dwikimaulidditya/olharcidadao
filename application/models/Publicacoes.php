<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');
public function getPublicacao($table, $id, $value){
		$data = $this ->db->query("select * from $table where $id like '%$value%'");
}
public function getTodasPublicacoes($table){
	$data = $this->db->get($table);
	return $data;
}
public function mostrar_todos_inicio($limit = null, $offset= null) {
}
public function mostrar_todos_inicio_categoria($limit = null, $offset= null, $categorie = 1) {
public function get_publicacao($publicacao_id){
public function get_usuario_publicacao($usuario_nome = ''){
public function getPublicacaoByID($id = NULL){
public function editarPublicacao($data, $id){
public function delete_usuario_publicacao($post_id){
public function criar_publicacao($data){
public function pegar_estado_query_editar($id){
public function pegar_estado_query(){
public function pegar_categoria_query(){
public function pegar_cidades_query($idEstado){
public function pegar_categoria_query_editar($id){
public function pegar_cidades_query_editar($idCidade, $idEstado){
public function search($keyword){
public function search_user($keyword){
public function CountAll(){
public function CountByCategory($categoria){
public function CountByUsuario($usuario_nome){
}