@extends('layouts.frontoffice')

@section('content')

        <!-- ......... -->
        <!-- Formulário -->
        <!-- ......... -->
        <h1 class="product-card_tit">Contactos</h1>
        <form class="contact-form">
            <div class="form-group">
                <input type="text" id="nome" placeholder="Nome*" name="nome" required>
            </div>
            <div class="form-group">
                <input type="email" id="email" placeholder="Email*" name="email" required>
            </div>
            <div class="form-group">
                <input type="text" id="contacto" placeholder="Contacto*" name="contacto" required>
            </div>
            <div class="form-group">
                <select class="contactos-selecione" id="assunto" name="assunto" required>
                    <option value="" disabled selected>Selecione*</option>
                    <option value="Dúvida">Dúvida</option>
                    <option value="Problema Técnico">Problema Técnico</option>
                    <option value="Feedback">Feedback</option>
                    <!-- Adicione mais opções conforme necessário -->
                </select>
            </div>
            <div class="form-group">
                <textarea id="mensagem" placeholder="Mensagem*" name="mensagem" required></textarea>
            </div>
            <button type="submit">Enviar</button>
        </form>

        <!-- ......... -->
        <!-- contactos -->
        <!-- ......... -->
        <div class="content-line">

            <div class="info-block">
                <div class="info-icon">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="info-details">
                    <p class="info-contact">22 50 72 810</p>
                    <p class="info-departments">
                        Dep. Comercial<br>
                        Serviço Pós-venda<br>
                        Dep. Contabilidade<br>
                        Outros assuntos
                    </p>
                </div>
            </div>

            <div class="info-block">
                <div class="info-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="info-details">
                    <p class="info-contact">info@tradeshark.pt</p>
                    <p class="info-departments">
                        Info sobre encomendas<br>
                        Compras em loja<br>
                        Avarias<br>
                        Outros assuntos
                    </p>
                </div>
            </div>

            <p class="additional-text">
                <i class="fas fa-info-circle"></i><strong class="location-info_titulo"> Chamada para a rede fixa nacional.</strong><br>
                Devido ao grande fluxo de chamadas que diariamente a loja TradeShark recebe, é humanamente impossível o atendimento telefónico a todos os clientes que nos tentem contactar por essa via.
                Para um serviço mais célere, solicitamos que selecione um dos assuntos no formulário acima.
            </p>

        </div>

        <!-- ........... -->
        <!-- Localização -->
        <!-- ........... -->
        <h1 style="margin-top: 80px;" class="product-card_tit">Localização</h1>
        <div class="location-container">
            <div class="mapBox">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25888.20920445665!2d-8.661776944528079!3d41.259177710415166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2467ea5b285899%3A0xc31b9d60ece933ed!2sTECMAIA%20Parque!5e0!3m2!1spt-PT!2spt!4v1702230367920!5m2!1spt-PT!2spt" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="location-info">
                <p><Strong class="location-info_titulo">TradeShark Distribuição</Strong><br>
                    R. Eng. Frederico Ulrich 2650<br>
                    4470-605 Maia
                </p>

                <p><Strong class="location-info_titulo">Horário</Strong><br>
                    <Strong>Segunda a Sexta</Strong><br>
                    9:00 - 13:00 | 14:00 - 19:00<br>
                    <Strong>Sabados, Domingos e Feriados</Strong><br>
                    Encerrados<br>
                </p>

                <p><Strong class="location-info_titulo">Coordenadas GPS</Strong><br>
                    <Strong>Latitude</Strong><br>
                    41.2604212 | 41º00.0000<br>
                    <Strong>Latitude</Strong><br>
                    -8.6420923 | 8º00.0000<br>
                </p>
            </div>
        </div>

@endsection