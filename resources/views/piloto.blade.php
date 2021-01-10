@extends("layout")

@section('content')

	
		<div class="ui secondary menu">
			<div class="left menu">
				<h1 class="ui header"><i class="address card outline icon"></i>Tabela Piloto</h1>
			</div>
			<div class="right menu novoPiloto" id="registrarPiloto" style="padding-top: 5px">
				<a href="registrar_piloto.php" class="ui primary button">Novo Piloto</a>
			</div>
		</div>
		
<h3 class="ui dividing header">Filtros</h3>

<div id="filter-search">
    <form class="ui large form" id="form-filter">
        <div class="fields">
            <div class="four wide required field">
                <label>Tipo de Filtro</label>
                <select name="select" id="filter-select" class="ui fluid selection dropdown filter-select">
                    <option value='' selected>Selecione aqui</option>
                </select>
            </div>

            <div class="five wide required field">
                <label>Descrição do Filtro</label>

                <input name="description" id="filter-description" type="text" placeholder="Digite aqui a descrição do filtro..." disabled>

            </div>

            <div id="field-submit-filter" class="one wide field">
			<label>Buscar</label>
                <button type="submit" form="form-filter" id="button-filter" class="ui primary icon large submit button">
                    <i class="search link icon"></i>
                    {{--<i class=" icons">
                        <i class="inverted filter icon"></i>
                        <i class="inverted corner add icon"></i>
                    </i>--}}
                </button>
            </div>

            <div class="six wide field">
                <div class="ui horizontal list" id="filter-tags">
                    
                </div>
            </div>
            
        </div>
    </form>
</div>
		<table id="piloto_tabela" class="ui padded green celled striped table compact" style="text-align: center; width:100%;">
			<thead>
				<tr>
					<th>Imagem 01</th>
					<th>Imagem 02</th>
					<!--<th>Lacre</th>
					<th>Lacre do Cliente</th>-->
					<th>Cliente</th>
					<!--<th>Data da Criação</th>
					<th>Máquinas adicionais</th>
					<th>Tipo de Peça</th>
					<th>Tempo</th>
					<th>Custo</th>-->
					<th>Observações</th>
					<th>Ações</th>
				</tr>
			</thead>
		</table>
		
<div class="ui dimmer modals page">
    <div class="ui large modal" id="modalPiloto">
    
        <div class="header">
            <i class="class plus icon"></i> Registrar Piloto
        </div>  
    
        <div class="content">
            
        <form  class="ui form">
			<div class="ui segment">
				<div class="two fields">
					<div class="required field">
						<label for="imagem1_id">Imagem 01: </label>
						<input type="file" id="imagem1_id" name="imagem1_name" required/>
					</div>
					<div class="required field">
						<label for="imagem2_id">Imagem 02: </label>
						<input type="file" id="imagem2_id" name="imagem2_name" required/>
					</div>
				</div>
				<div class="two fields">
					<div class='required field'>
						<label for="lacre_id">Lacre: </label>
						<input type="text" id="lacre_id" name="lacre_name" required/>
					</div>
				<div class='field'>
					<div>
						<label for="lacre_do_cliente_id">Lacre do Cliente: </label>
						<input type="text" id="lacre_do_cliente_id" name="lacre_do_cliente_name" required/>
					</div>
				</div>
				</div>
				<div class="three fields">
					<div class='required field'>
						<label for="cliente_id">Cliente: </label>
						<input type="text" id="cliente_id" name="cliente_name" required/>
					</div>
				<div class='field'>
					<div>
						<label for="data_id">Data da Criação: </label>
						<input type="date" id="data_id" name="data_name" required/>
					</div>
				</div>
				<div class='field'>
					<div>
						<label for="maquina_id">Máquina: </label>
						<select id="maquina_id" name="maquina_name"></select>
					</div>
				</div>
				</div>
				<div class="three fields">
					<div class='required field'>
						<label>Máquinas adicionais</label>
					<input type="radio" id="maquina1_id" name="maquinas_adicionais_name" value="máquina 1"/><label for="maquina1_id">Máquina 1</label><br/>
					<input type="radio" id="maquina2_id" name="maquinas_adicionais_name" value="máquina 2"/><label for="maquina2_id">Máquina 2</label><br/>
					<input type="radio" id="maquina3_id" name="maquinas_adicionais_name" value="máquina 3"/><label for="maquina3_id">Máquina 3</label><br/>
					</div>
				<div class='field'>
					<div>
						<<label for="ajustes_id">Ajustes: </label>
						<select id="ajustes_id" name="ajustes_name"></select>
					</div>
				</div>
				<div class='field'>
					<div>
						<label>Tipo de Peça</label>
					<input type="radio" id="calca_feminina_id" name="peca_name" value="calça feminina"/><label for="calca_feminina_id">Calça feminina</label><br/>
					<input type="radio" id="calca_masculina_id" name="peca_name" value="calça masculina"/><label for="calca_masculina_id">Calça masculina</label><br/>
					<input type="radio" id="short_id" name="peca_name" value="short"/><label for="short_id">Short</label><br/>
					<input type="radio" id="bermuda_feminina_id" name="peca_name" value="bermuda feminina"/><label for="bermuda_feminina_id">Bermuda feminina</label><br/>
					<input type="radio" id="bermuda_masculina_id" name="peca_name" value="bermuda masculina"/><label for="bermuda_masculina_id">Bermuda masculina</label><br/>
					<input type="radio" id="saia_id" name="peca_name" value="saia"/><label for="saia_id">Saia</label><br/>
					<input type="radio" id="outro_id" name="peca_name" value="outro"/><label for="outro_id">Outro</label><br/>
					</div>
				</div>
				</div>
				<div class="three fields">
					<div class='required field'>
						<label for="tempo_id">Tempo: </label>
						<input type="text" id="tempo_id" name="tempo_name" required/>
					</div>
				<div class='field'>
					<div>
						<label for="custo_id">Custo: </label>
						<input type="text" id="custo_id" name="custo_name" required/>
					</div>
				</div>
				<div class='field'>
					<div>
						<label for="observacao_id">Observações: </label>
						<p><textarea id="observacao_id" name="observacao_name" rows="4" cols="50" required/></textarea></p>
					</div>
				</div>
				</div>
			</div>
		</form>
		</div>
			<div class="actions">
				<div class="ui red button btnCancelarRegistrar">Cancelar</div>
				<div class="ui green button btnRegistrar">
					Salvar
				</div>
			</div>
		</div>
		</div>
		<script type="text/javascript" src="{{ asset( 'js/piloto.js' ) }}"></script>
		<script type="text/javascript" src="{{ asset( 'js/pilotoTable.js' ) }}"></script>
@endsection