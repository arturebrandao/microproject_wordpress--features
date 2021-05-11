function dinheiro(i) {
  var v = i.value.replace(/\D/g, '');
  v = (v / 100).toFixed(2) + '';
  v = v.replace('.', ',');
  v = v.replace(/(\d)(\d{3})(\d{3}),/g, '$1.$2.$3,');
  v = v.replace(/(\d)(\d{3}),/g, '$1.$2,');
  i.value = v;
}

function mascara(o, f) {
  v_obj = o;
  v_fun = f;
  setTimeout('execmascara()', 1);
}
function execmascara() {
  v_obj.value = v_fun(v_obj.value);
}

function AlphaNumber(v) {
  return v.replace(/[^A-Za-z0-9_]/g, '');
}

function soNumeros(v) {
  return v.replace(/\D/g, '');
}

function cpf(v) {
  v = v.replace(/\D/g, '');
  v = v.replace(/(\d{3})(\d)/, '$1.$2');
  v = v.replace(/(\d{3})(\d)/, '$1.$2');
  v = v.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
  return v;
}

function cnpj(v) {
  v = v.replace(/\D/g, '');
  v = v.replace(/(\d{2})(\d)/, '$1.$2');
  v = v.replace(/(\d{3})(\d)/, '$1.$2');
  v = v.replace(/(\d{3})(\d)/, '$1/$2');
  v = v.replace(/(\d{4})(\d)/, '$1-$2');
  return v;
}

function cep(v) {
  v = v.replace(/\D/g, '');
  v = v.replace(/(\d{5})(\d{3})/, '$1-$2');
  return v;
}

function telefone(v) {
  v = v.replace(/\D/g, '');
  v = v.replace(/^(\d\d)(\d)/g, '($1) $2');
  v = v.replace(/(\d{4})(\d)/, '$1-$2');
  return v;
}

function celular(v) {
  v = v.replace(/\D/g, '');
  v = v.replace(/^(\d\d)(\d)/g, '($1) $2');
  v = v.replace(/(\d{5})(\d)/, '$1-$2');
  return v;
}

document.addEventListener('readystatechange', (event) => {
  if (event.target.readyState === 'complete') {
    if (document.querySelector('.acfThemeMaskCelular')) {
      document
        .querySelectorAll(
          '.acfThemeMaskCelular .acf-input .acf-input-wrap input',
        )
        .forEach((el) => {
          el.setAttribute('onkeypress', 'mascara(this, celular)');
          el.setAttribute('maxlength', '15');
        });
    }

    if (document.querySelector('.acfThemeMaskTelefone')) {
      document
        .querySelectorAll(
          '.acfThemeMaskTelefone .acf-input .acf-input-wrap input',
        )
        .forEach((el) => {
          el.setAttribute('onkeypress', 'mascara(this, telefone)');
          el.setAttribute('maxlength', '14');
        });
    }

    if (document.querySelector('.acfThemeMaskDinheiro')) {
      document
        .querySelectorAll(
          '.acfThemeMaskDinheiro .acf-input .acf-input-wrap input',
        )
        .forEach((el) => {
          el.setAttribute('onkeyup', 'dinheiro(this)');
        });
    }

    if (document.querySelector('.acfThemeMaskCPF')) {
      document
        .querySelectorAll('.acfThemeMaskCPF .acf-input .acf-input-wrap input')
        .forEach((el) => {
          el.setAttribute('onkeypress', 'mascara(this, cpf)');
          el.setAttribute('maxlength', '14');
        });
    }

    if (document.querySelector('.acfThemeMaskCNPJ')) {
      document
        .querySelectorAll('.acfThemeMaskCNPJ .acf-input .acf-input-wrap input')
        .forEach((el) => {
          el.setAttribute('onkeypress', 'mascara(this, cnpj)');
          el.setAttribute('maxlength', '18');
        });
    }

    if (document.querySelector('.acfThemeMaskNumber')) {
      document
        .querySelectorAll(
          '.acfThemeMaskNumber .acf-input .acf-input-wrap input',
        )
        .forEach((el) => {
          el.setAttribute('onkeypress', 'mascara(this, soNumeros)');
        });
    }

    if (document.querySelector('.acfThemeMaskAlphanumeric')) {
      document
        .querySelectorAll(
          '.acfThemeMaskAlphanumeric .acf-input .acf-input-wrap input',
        )
        .forEach((el) => {
          el.setAttribute('onkeypress', 'mascara(this, AlphaNumber)');
        });
    }

    if (document.querySelector('.acfThemeMaskCEP')) {
      document
        .querySelectorAll('.acfThemeMaskCEP .acf-input .acf-input-wrap input')
        .forEach((el) => {
          el.setAttribute('onkeypress', 'mascara(this, cep)');
          el.setAttribute('maxlength', '8');
        });
    }
  }
});
