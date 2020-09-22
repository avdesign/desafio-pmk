<div class="form-row">
  <div class="form-group col-md-12">
    <input type="text" class="form-control" name="name"  placeholder="Nome do doador">
  </div>
  <div class="form-row">
    <div class="form-group col-md-2">
      <input type="text" class="form-control" name="phone[country_code]" value="+55">
    </div>
    <div class="form-group col-md-2">
      <input type="text" class="form-control" name="phone[code]" placeholder="DDD">
    </div>
    <div class="form-group col-md-8">
      <input type="text" class="form-control" name="phone[number]" placeholder="Telefone 1">
    </div>    
  </div>
  <div class="form-row">
    <div class="form-group col-md-2">
      <input type="text" class="form-control" name="phone[country_code]" value="+55">
    </div>
    <div class="form-group col-md-2">
      <input type="text" class="form-control" name="phone[code]" placeholder="DDD">
    </div>
    <div class="form-group col-md-8">
      <input type="text" class="form-control" name="phone[number]" placeholder="Telefone 2">
    </div>    
  </div>
  
  <div class="form-group col-md-6">
    <input type="email" name="email" class="form-control"  placeholder="Email">
  </div>
  <div class="form-group col-md-6">
    <input type="text" name="document" class="form-control" id="document" placeholder="CPF">
  </div>
</div>
<div class="form-group">
  <input type="text" name="address" class="form-control" placeholder="Endereço">
</div>

<div class="form-row">
  <div class="form-group col-md-3">
    <input type="text" class="form-control"  placeholder="Número">
  </div>
  <div class="form-group col-md-9">
    <input type="text" class="form-control" placeholder="Complemento">
  </div>  
</div>

<div class="form-row">
  <div class="form-group col-md-6">
    <input type="text" class="form-control"  placeholder="Bairro">
  </div>
  <div class="form-group col-md-6">
    <input type="text" class="form-control" placeholder="Cidade">
  </div>  
</div>

<div class="form-row">
  <div class="form-group col-md-8">
    <select id="inputState" class="form-control">
      <option selected>Selecione o Estado</option>
      <option>...</option>
    </select>
  </div>
  <div class="form-group col-md-4">
    <input type="text" class="form-control" placeholder="CEP">
  </div>
</div>

<div class="form-row">
  <div class="form-group col-md-6">
    <select id="inputState" class="form-control">
      <option selected>Intervalo de Doação </option>
      <option>...</option>
    </select>
  </div>
  <div class="form-group col-md-6">
    <select id="inputState" class="form-control">
      <option selected>Forma de Pagamento</option>
      <option>...</option>
    </select>
  </div>
</div>

<div class="form-row">
  <div class="form-group col-md-10">
    <input type="text" class="form-control" id="doation_value" name="doation[value]" placeholder="Valor">
  </div>
  <div class="form-group col-md-2">
    <input type="number" class="form-control" ia="payment_day" name="payment_day" placeholder="Dia do Mês">
  </div>  
</div>