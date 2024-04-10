Desenvolvedores : Guilherme Silva, Ana Vitória, William Sousa e Marcos Fabricio.

a) acesse o arquivo php.ini (acessível através do botão "config" do Apache no XAMPP) e liste os valores definidos para file_uploads, upload_max_filesize, upload_tmp_dir, post_max_size, max_input_time?

file_uploads = 1500
upload_max = 40M
upload_tmp_dir="C:\xampp\tmp"
post_max_size = 40 M
max_input_time=60


b) para que servem as funções is_uploaded_file() e move_uploaded_file()?

is_uploaded_file(): Esta função é usada para verificar 
se o arquivo foi enviado através de uma requisição HTTP POST.
 Ela recebe como parâmetro o nome do arquivo e retorna true 
se o arquivo foi enviado via POST, ou false caso contrário. 
É útil para verificar se o arquivo foi realmente enviado 
através do formulário e não foi manipulado de outra forma.

move_uploaded_file(): Esta função é utilizada para mover um 
arquivo enviado para o servidor para uma localização desejada 
no sistema de arquivos do servidor. 




c) Para que serve a tag <input type="hidden">?

)A tag <input type="hidden"> é usada em formulários HTML para 
criar campos ocultos. Esses campos não são visíveis para o 
usuário, mas seus valores são enviados quando o formulário 
é submetido.



d) Como filtrar as extensões de arquivos que serão aceitas para upload no programa PHP?

$_FILES['type'] representa o tipo MIME do arquivo enviado e 
pode ser útil para verificar o tipo de arquivo ou para determinar
 como o arquivo deve ser tratado no script PHP.
