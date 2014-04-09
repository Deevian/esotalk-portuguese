<?php
// Copyright 2011 Toby Zerner, Simon Zerner
// This file is part of esoTalk. Please see the included license file for usage information.

ET::$languageInfo["Portuguese"] = array(
	"locale" => "pt-PT",
	"name" => "Portuguese",
	"description" => "A casual Portuguese language pack.",
	"version" => ESOTALK_VERSION,
	"author" => "Deevian",
	"authorEmail" => "jpmcabreu@gmail.com",
	"authorURL" => "http://voaremterra.wordpress.com",
	"license" => "GPLv2"
);

// Define the character set that this language uses.
$definitions["charset"] = "utf-8";

$definitions["date.full"] = "j M Y, g:ia \G\M\TO"; // see http://au.php.net/manual/en/function.date.php for details

$definitions["%d day ago"] = "ontem";
$definitions["%d days ago"] = "há %d dias";
$definitions["%d hour ago"] = "há 1 hora";
$definitions["%d hours ago"] = "há %d horas";
$definitions["%d minute ago"] = "há 1 minuto";
$definitions["%d minutes ago"] = "há %d minutos";
$definitions["%d month ago"] = "há 1 mês";
$definitions["%d months ago"] = "há %d meses";
$definitions["%d second ago"] = "há 1 segundo";
$definitions["%d seconds ago"] = "há %d segundos";
$definitions["%d week ago"] = "na semana passada";
$definitions["%d weeks ago"] = "há %d semanas";
$definitions["%d year ago"] = "no ano passado";
$definitions["%d years ago"] = "há %d anos";

$definitions["%s and %s"] = "%s e %s";
$definitions["%s can view this conversation."] = "%s pode ver esta conversa.";
$definitions["%s changed %s's group to %s."] = "%s mudou o grupo de %s para %s.";
$definitions["%s changed your group to %s."] = "%s mudou o teu grupo para %s.";
$definitions["%s conversation"] = "%s conversa";
$definitions["%s conversations"] = "%s conversas";
$definitions["%s invited you to %s."] = "%s convidou-te para %s.";
$definitions["%s joined the forum."] = "%s juntou-se ao fórum.";
$definitions["%s post"] = "%s publicação";
$definitions["%s posted %s"] = "%s publicou %s";
$definitions["%s posted in %s."] = "%s publicou em %s.";
$definitions["%s posts"] = "%s publicações";
$definitions["%s reply"] = "%s resposta";
$definitions["%s replies"] = "%s respostas";
$definitions["%s Settings"] = "Configurações de %s";
$definitions["%s started the conversation %s."] = "%s iniciou a conversa %s.";
$definitions["%s tagged you in a post."] = "%s mentionou-te numa publicação.";
$definitions["%s will be able to view this conversation."] = "%s irá conseguir ver esta conversa.";
$definitions["%s will be able to:"] = "%s irá conseguir:";

$definitions["Success!"] = "Sucesso!";
$definitions["A new version of esoTalk (%s) is available."] = "Está disponível uma nova versão do esoTalk (%s).";
$definitions["a private conversation"] = "uma conversa privada";
$definitions["Access the administrator control panel."] = "Aceder ao painel de controlo dos administradores.";
$definitions["Account type"] = "Tipo de conta";
$definitions["Activate"] = "Activar";
$definitions["Activity"] = "Actividade";
$definitions["Add"] = "Adicionar";
$definitions["Administration"] = "Administração";
$definitions["Administrator email"] = "Email do Administrador";
$definitions["Administrator password"] = "Password do Administrador";
$definitions["Administrator username"] = "Username do Administrador";
$definitions["Advanced options"] = "Opções avançadas";
$definitions["All Channels"] = "Todos os Canais";
$definitions["Allow members to edit their own posts:"] = "Permitir que os membros editem as suas próprias publicações:";
$definitions["Already have an account? <a href='%s' class='link-login'>Log in!</a>"] = "Já tens uma conta? <a href='%s' class='link-login'>Entra!</a>";
$definitions["Appearance"] = "Aparência";
$definitions["Automatically star conversations that I reply to"] = "Seguir automaticamente conversas a que eu responda";
$definitions["Avatar"] = "Avatar";

$definitions["Back to channels"] = "Voltar aos canais";
$definitions["Back to conversation"] = "Voltar à conversa";
$definitions["Back to member"] = "Voltar ao membro";
$definitions["Back to members"] = "Voltar aos membros";
$definitions["Back to search"] = "Voltar à pesquisa";
$definitions["Background color"] = "Cor de fundo";
$definitions["Background image"] = "Imagem de fundo";
$definitions["Base URL"] = "URL base";
$definitions["Bold"] = "Negrito";
$definitions["By %s"] = "Por %s";

$definitions["Can suspend/unsuspend members"] = "Pode suspender/des-suspenser membros";
$definitions["Cancel"] = "Cancelar";
$definitions["Change %s's Permissions"] = "Alterar as Permissões de %s";
$definitions["Change avatar"] = "Alterar avatar";
$definitions["Change Channel"] = "Alterar Canal";
$definitions["Change channel"] = "Alterar canal";
$definitions["Change username"] = "Alterar nome de utilizador";
$definitions["Change Password or Email"] = "Alterar Password ou Email";
$definitions["Change Password"] = "Alterar Password";
$definitions["Change password"] = "Alterar password";
$definitions["Change permissions"] = "Alterar permissões";
$definitions["Change"] = "Alterar";
$definitions["Channel description"] = "Descrição de canal";
$definitions["Channel List"] = "Lista de Canais";
$definitions["Channel title"] = "Título de canal";
$definitions["Channel slug"] = "Slug de canal";
$definitions["Channels"] = "Canais";
$definitions["Choose a secure password of at least %s characters"] = "Escolhe uma password segura com pelo menos %s caracteres";
$definitions["Choose what people will see when they first visit your forum."] = "Escolhe o que as pessoas irão ver quando visitam o teu fórum pela primeira vez.";
$definitions["Click on a member's name to remove them."] = "Carrega no nome de um membro para o remover.";
$definitions["Close registration"] = "Fechar registos";
$definitions["Confirm password"] = "Confirmar password";
$definitions["Context"] = "Contexto";
$definitions["Controls"] = "Controlos";
$definitions["Conversation"] = "Conversa";
$definitions["Conversations participated in"] = "Conversas em que participaste";
$definitions["Conversations started"] = "Conversas iniciadas";
$definitions["Conversations"] = "Conversas";
$definitions["Copy permissions from"] = "Copiar permissões de";
$definitions["Create Channel"] = "Criar Canal";
$definitions["Create Group"] = "Criar Grupo";
$definitions["Create Member"] = "Criar Membro";
$definitions["Customize how users can become members of your forum."] = "Customiza a forma como os utilizadores se podem tornar membros do teu fórum.";
$definitions["Customize your forum's appearance"] = "Customiza a aparência do teu fórum";

$definitions["Dashboard"] = "Painel";
$definitions["Default forum language"] = "Linguagem por defeito do fórum";
$definitions["<strong>Delete</strong> all conversations forever."] = "<strong>Apagar</strong> todas as conversas permanentemente.";
$definitions["Delete Channel"] = "Apagar Canal";
$definitions["Delete conversation"] = "Apagar conversa";
$definitions["Delete member"] = "Apagar membro";
$definitions["Delete Member"] = "Apagar Membro";
$definitions["<strong>Delete this member's posts.</strong> All of this member's posts will be marked as deleted, but will be able to be restored manually."] = "<strong>Apagar as publicações deste membro.</strong> Todas as publicações deste membro serão marcadas como apagadas, mas ainda será possível recuperá-las manualmente.";
$definitions["Delete"] = "Apagar";
$definitions["Deleted %s by %s"] = "Apagou %s por %s";
$definitions["Disable"] = "Desactivar";
$definitions["Discard"] = "Descartar";
$definitions["Don't have an account? <a href='%s' class='link-join'>Sign up!</a>"] = "Ainda não tens conta? <a href='%s' class='link-join'>Regista-te já!</a>";
$definitions["Don't repeat"] = "Não repetir";

$definitions["Edit Channel"] = "Editar Canal";
$definitions["Edit Group"] = "Editar Grupo";
$definitions["Edit member groups"] = "Editar grupos do membro";
$definitions["Edit your profile"] = "Editar o teu perfil";
$definitions["Edit"] = "Editar";
$definitions["Edited %s by %s"] = "Editado %s por %s";
$definitions["Editing permissions"] = "A editar permissões";
$definitions["Email me when I'm added to a private conversation"] = "Envia-me um email quando for adicionado a uma conversa privada";
$definitions["Email me when someone posts in a conversation I have starred"] = "Envia-me um email quando alguém publicar numa conversa que eu siga";
$definitions["Email"] = "Email";
$definitions["Enable"] = "Ligar";
$definitions["Enabled"] = "Ligado";
$definitions["Enter a conversation title"] = "Introduz um titulo para a conversa";
$definitions["Error"] = "Erro";
$definitions["esoTalk version"] = "Versão do esoTalk";
$definitions["Everyone"] = "Todos";

$definitions["Fatal Error"] = "Uh oh! É um erro fatal...";
$definitions["Feed"] = "Feed";
$definitions["Filter by name or group..."] = "Filtra por nome ou grupo...";
$definitions["Find this post"] = "Encontra esta publicação";
$definitions["First posted"] = "Primeiro publicado";
$definitions["Follow to receive notifications"] = "Segue para receber notificações";
$definitions["For %s seconds"] = "Por %s segundos";
$definitions["Forever"] = "Para sempre";
$definitions["Forgot?"] = "Esqueceste-te?";
$definitions["Forgot Password"] = "Esqueci-me da Password";
$definitions["Forum header"] = "Cabeçalho do fórum";
$definitions["Forum language"] = "Linguagem do fórum";
$definitions["Forum Settings"] = "Opções do Fórum";
$definitions["Forum Statistics"] = "Estatísticas do Fórum";
$definitions["Forum title"] = "Título do fórum";
$definitions["forumDescription"] = "%s é um web-fórum onde se discute %s, e %s.";

$definitions["Give this group the 'moderate' permission on all existing channels"] = "Dar a permissão de 'moderação' em todos os canais a este grupo";
$definitions["Global permissions"] = "Permissões globais";
$definitions["Go to top"] = "Voltar ao topo";
$definitions["Group name"] = "Nome de grupo";
$definitions["group.administrator"] = "Administrador";
$definitions["group.administrator.plural"] = "Administradores";
$definitions["group.guest"] = "Convidado";
$definitions["group.guest.plural"] = "Convidados";
$definitions["group.member"] = "Membro";
$definitions["group.member.plural"] = "Membros";
$definitions["group.Moderator"] = "Moderador";
$definitions["group.Moderator.plural"] = "Moderadores";
$definitions["group.suspended"] = "Suspenso";
$definitions["Groups can be used to categorize members and give them certain privileges."] = "Grupos podem ser usados para categorizar membros e dar-lhes certos privilégios.";
$definitions["Groups"] = "Grupos";

$definitions["Header"] = "Cabeçalho";
$definitions["Header color"] = "Cor de cabeçalho";
$definitions["Hide"] = "Esconder";
$definitions["Home page"] = "Página inicial";
$definitions["HTML is allowed."] = "É permitido HTML.";

$definitions["If you run into any other problems or just want some help with the installation, feel free to ask for assistance at the <a href='%s'>esoTalk support forum</a>."] = "Se encontrares outros problemas ou apenas quiseres ajuda com alguma coisa da instalação, podes procurar assistência no <a href='%s'>fórum de suporte do esoTalk</a>.";
$definitions["Install esoTalk"] = "Instalar esoTalk";
$definitions["Install My Forum"] = "Instalar o Meu Fórum";
$definitions["Installed Languages"] = "Linguagens Instaladas";
$definitions["Installed Plugins"] = "Plugins Instalados";
$definitions["Installed plugins"] = "Plugins instalados";
$definitions["Installed Skins"] = "Skins Instaladas";
$definitions["Installed skins"] = "Skins instaladas";
$definitions["is %s"] = "é %s";

$definitions["Joined"] = "Registou-se";
$definitions["Jump to last"] = "Saltar para o último";
$definitions["Jump to unread"] = "Saltar para os não lidos";
$definitions["just now"] = "agora mesmo";

$definitions["Keep me logged in"] = "Mantém-me ligado";
$definitions["<strong>Keep this member's posts.</strong> All of this member's posts will remain intact, but will show [deleted] as the author."] = "<strong>Manter as publicações deste membro.</strong> Todas as publicações deste membro manter-se-ão intactas, mas irão mostrar [apagado] como o autor.";

$definitions["label.draft"] = "Rascunho";
$definitions["label.locked"] = "Trancado";
$definitions["label.muted"] = "Silenciado";
$definitions["label.private"] = "Privado";
$definitions["label.sticky"] = "Fixo";
$definitions["Labels"] = "Etiquetas";
$definitions["Last active"] = "Último activo";
$definitions["Last active %s"] = "Último activa %s";
$definitions["Latest News"] = "Últimas Notícias";
$definitions["Loading..."] = "A Carregar...";
$definitions["Lock"] = "Cadeado";
$definitions["Log In"] = "Entrar";
$definitions["Log Out"] = "Sair";

$definitions["Make member and online list visible to:"] = "Tornar lista de membros e de pessoas online visível a:";
$definitions["Manage Groups"] = "Gerir Grupos";
$definitions["Manage Languages"] = "Gerir Linguagens";
$definitions["Manage your forum's channels (categories)"] = "Gerir os canais (categorias) do teu fórum";
$definitions["Mark as read"] = "Marcar como lido";
$definitions["Mark as unread"] = "Marcar como não lido";
$definitions["Mark all as read"] = "Marcar todos como lido";
$definitions["Mark listed as read"] = "Marcar listados como lido";
$definitions["Maximum size of %s. %s."] = "Tamanho máximo de %s. %s.";
$definitions["Member groups"] = "Grupos do membro";
$definitions["Member list"] = "Lista de membros";
$definitions["Member List"] = "Lista de Membros";
$definitions["Member privacy"] = "Privacidade do membro";
$definitions["Members Allowed to View this Conversation"] = "Membros Autorizados a Ver Esta Conversa";
$definitions["Members Online"] = "Membros Online";
$definitions["Members"] = "Membros";
$definitions["Mobile skin"] = "Skin Mobile";
$definitions["Moderate"] = "Moderar";
$definitions["<strong>Move</strong> conversations to the following channel:"] = "<strong>Mover</strong> conversas para o seguinte canal:";
$definitions["Mute conversation"] = "Silenciar conversa";
$definitions["MySQL database"] = "Base de dados MySQL";
$definitions["MySQL host address"] = "Endereço de host MySQL";
$definitions["MySQL password"] = "Password de MySQL";
$definitions["MySQL queries"] = "Queries de MySQL";
$definitions["MySQL table prefix"] = "Prefixo das tabelas de MySQL";
$definitions["MySQL username"] = "Username de MySQL";
$definitions["MySQL version"] = "Versão de MySQL";

$definitions["Name"] = "Nome";
$definitions["never"] = "nunca";
$definitions["%s new"] = "%s novos";
$definitions["New conversation"] = "Nova conversa";
$definitions["New Conversation"] = "Nova Conversa";
$definitions["New conversations in the past week"] = "Novas conversas na semana passada";
$definitions["New email"] = "Novo email";
$definitions["New members in the past week"] = "Novos membros na semana passada";
$definitions["New password"] = "Nova password";
$definitions["New posts in the past week"] = "Novas publicaçoes na última semana";
$definitions["New username"] = "Novo utilizador";
$definitions["Next Step"] = "Próximo Passo";
$definitions["Next"] = "Próximo";
$definitions["No preview"] = "Sem pré-visualização";
$definitions["No"] = "Não";
$definitions["Notifications"] = "Notificações";
$definitions["Now"] = "Agora";

$definitions["OK"] = "OK";
$definitions["Online"] = "Online";
$definitions["online"] = "online";
$definitions["Open registration"] = "Abrir registos";
$definitions["optional"] = "optional";
$definitions["Order By:"] = "Ordernar Por:";
$definitions["Original Post"] = "Publicação Original";

$definitions["Page Not Found"] = "Página Não Encontrada";
$definitions["Password"] = "Password";
$definitions["PHP version"] = "Versão de PHP";
$definitions["Plugins"] = "Plugins";
$definitions["Post a Reply"] = "Publicar uma Resposta";
$definitions["Post count"] = "Contagem de publicações";
$definitions["Posts"] = "Publicações";
$definitions["Preview"] = "Pre-visualização";
$definitions["Previous"] = "Anterior";

$definitions["Quote"] = "Citar";
$definitions["quote"] = "citar";

$definitions["Read more"] = "Ler mais";
$definitions["Recent posts"] = "Publicações recentes";
$definitions["Recover Password"] = "Recuperar Password";
$definitions["Registered members"] = "Membros registados";
$definitions["Registration"] = "Registo";
$definitions["Remove avatar"] = "Remover avatar";
$definitions["Rename Member"] = "Renomear Membro";
$definitions["Reply"] = "Responder";
$definitions["Report a bug"] = "Reportar um bug";
$definitions["Require users to confirm their email address"] = "Obrigar os utilizadores a confirmar o seu endereço de email";
$definitions["Restore"] = "Restaurar";
$definitions["restore"] = "restaurar";
$definitions["Reset"] = "Repor";

$definitions["Save Changes"] = "Gravar Alterações";
$definitions["Save Draft"] = "Gravar Rascunho";
$definitions["Search conversations..."] = "Pesquisar conversas...";
$definitions["Search within this conversation..."] = "Pesquisar dentro desta conversa...";
$definitions["Search"] = "Pesquisar";
$definitions["See the private conversations I've had with %s"] = "Ver as conversas privadas que já tive com %s";
$definitions["Set a New Password"] = "Definir uma Password Nova";
$definitions["Settings"] = "Opções";
$definitions["Show an image in the header"] = "Mostrar uma imagem no cabeçalho";
$definitions["Show matching posts"] = "Mostrar publicações correspondentes";
$definitions["Show the channel list by default"] = "Mostrar a lista de canais por defeito";
$definitions["Show the conversation list by default"] = "Mostrar a lista de conversas por defeito";
$definitions["Show the forum title in the header"] = "Mostrar o título do fórum no cabeçalho";
$definitions["Sign Up"] = "Registar";
$definitions["Skins"] = "Skins";
$definitions["Specify Setup Information"] = "Especificar Informações de Configuração";
$definitions["Star to receive notifications"] = "Segue para receber notificações";
$definitions["Starred"] = "A Seguir";
$definitions["Start"] = "Iniciar";
$definitions["Start a conversation"] = "Iniciar uma conversa";
$definitions["Start a new conversation"] = "Iniciar uma conversa nova";
$definitions["Start a private conversation with %s"] = "Iniciar uma conversa privada com %s";
$definitions["Start Conversation"] = "Iniciar Conversa";
$definitions["Starting a conversation"] = "A iniciar uma conversa";
$definitions["Statistics"] = "Estatísticas";
$definitions["statistic.conversation.plural"] = "%s conversas";
$definitions["statistic.conversation"] = "%s conversa";
$definitions["statistic.member.plural"] = "%s membros";
$definitions["statistic.member"] = "%s membro";
$definitions["statistic.online.plural"] = "%s online";
$definitions["statistic.online"] = "%s online";
$definitions["statistic.post.plural"] = "%s publicações";
$definitions["statistic.post"] = "%s publicação";
$definitions["Sticky"] = "Fixo";
$definitions["Subscribe"] = "Subscrever";
$definitions["Subscribed"] = "Subscrito";
$definitions["Subscription"] = "Subscrição";
$definitions["Suspend member"] = "Suspenser membro";
$definitions["Suspend members."] = "Suspender membros.";
$definitions["Suspend"] = "Suspender";

$definitions["To get started with your forum, you might like to:"] = "Para dar início ao teu fórum, talvez queiras:";

$definitions["Unhide"] = "Mostrar";
$definitions["Uninstall"] = "Desinstalar";
$definitions["Unlock"] = "Destrancar";
$definitions["Unmute conversation"] = "Des-silenciar conversa";
$definitions["Unstarred"] = "Não segues";
$definitions["Unsticky"] = "Des-fixar";
$definitions["Unsubscribe new users by default"] = "Des-subscrever novos utilizadores por defeito";
$definitions["Unsubscribe"] = "Des-subscrever";
$definitions["Unsubscribed"] = "Des-subscrito";
$definitions["Unsuspend member"] = "Des-suspender membro";
$definitions["Unsuspend"] = "Des-suspender";
$definitions["Until someone replies"] = "Até que alguém responda";
$definitions["Untitled conversation"] = "Conversa sem título";
$definitions["Upgrade esoTalk"] = "Actualizar esoTalk";
$definitions["Use a background image"] = "Usar uma imagem de fundo";
$definitions["Use for mobile"] = "Usar para mobile";
$definitions["Use friendly URLs"] = "Usar URLs amigáveis";
$definitions["Used to verify your account and subscribe to conversations"] = "Usado para verificar a tua conta e para subscrever a conversas";
$definitions["Username"] = "Nome de utilizador";
$definitions["Username or Email"] = "Nome de utilizador ou Email";

$definitions["View %s's profile"] = "Ver perfil de %s";
$definitions["View all notifications"] = "Ver todas as notificações";
$definitions["View more"] = "Ver mais";
$definitions["View your profile"] = "Ver o teu perfil";
$definitions["View"] = "Ver";
$definitions["Viewing: %s"] = "A ver: %s";
$definitions["viewingPosts"] = "<b>%s-%s</b> de %s publicações";

$definitions["Warning"] = "Uh oh, alguma coisa não está bem!";
$definitions["Welcome to esoTalk!"] = "Bem-vindo ao esoTalk!";
$definitions["We've logged you in and taken you straight to your forum's administration panel. You're welcome."] = "Fizemos-te login e levámos-te directamente para o painel de administração do fórum. De nada!";
$definitions["Write a reply..."] = "Escrever uma resposta...";

$definitions["Yes"] = "Sim";
$definitions["You can manage channel-specific permissions on the channels page."] = "Podes gerir as permissões dos canais nas suas respectivas páginas.";
$definitions["Your current password"] = "A tua password actual";


// Messages.
$definitions["message.404"] = "Oh dear - the page you requested could not be found! Try going back and clicking a different link. Or something else.";
$definitions["message.ajaxDisconnected"] = "Unable to communicate with the server. Wait a few seconds and <a href='javascript:jQuery.ETAjax.resumeAfterDisconnection()'>try again</a>, or <a href='' onclick='window.location.reload();return false'>refresh the page</a>.";
$definitions["message.ajaxRequestPending"] = "Hey! We're still processing some of your stuff! If you navigate away from this page you might lose any recent changes you've made, so wait a few seconds, ok?";
$definitions["message.avatarError"] = "There was a problem uploading your avatar. Make sure you're using a valid image type (like .jpg, .png, or .gif) and the file isn't really really huge.";
$definitions["message.cannotDeleteLastChannel"] = "Hey, wait up, you can't delete the last channel! Where would your conversations go? That's just silly.";
$definitions["message.cannotEditSinceReply"] = "You can't edit your post because someone has replied since you posted it.";
$definitions["message.changesSaved"] = "Your changes were saved.";
$definitions["message.channelsHelp"] = "Channels are used to categorize conversations on your forum. You can create as many channels as needed, and rearrange/nest them by dragging and dropping below.";
$definitions["message.channelSlugTaken"] = "This slug is already in use by another channel.";
$definitions["message.confirmDelete"] = "Are you sure you want to delete this? Seriously, you won't be able to get it back.";
$definitions["message.confirmDiscardReply"] = "You have not saved your reply as a draft. Do you wish to discard it?";
$definitions["message.confirmEmail"] = "Before you can start using your newly-created account, you'll need to confirm your email address. Within the next minute or two you should receive an email from us containing a link to activate your account.";
$definitions["message.confirmLeave"] = "Woah, you haven't saved the stuff you are editing! If you leave this page, you'll lose any changes you've made. Is this ok?";
$definitions["message.connectionError"] = "esoTalk could not connect to the MySQL server. The error returned was:<br/>%s";
$definitions["message.conversationDeleted"] = "The conversation was deleted. Didn't that feel good?";
$definitions["message.conversationNotFound"] = "For some reason this conversation cannot be viewed. It may not exist, or you may not have permission to view it.";
$definitions["message.cookieAuthenticationTheft"] = "For security reasons, we couldn't log you in with your 'remember me' cookie. Please log in manually!";
$definitions["message.deleteChannelHelp"] = "Woah, hold up there! If you delete this channel, there'll be no way to get it back. Unless you build a time machine. But, uh, there'll be no <em>easy</em> way to get it back. All of the conversations in this channel can be moved to another of your choice.";
$definitions["message.emailConfirmed"] = "Cool! Your account has been validated and you can now start participating in conversations. Why not <a href='".URL("conversation/start")."'>start one</a> yourself?";
$definitions["message.emailDoesntExist"] = "That email address doesn't match any members in the database. Did you make a typo?";
$definitions["message.emailNotYetConfirmed"] = "You need to confirm your email before you can log in with it! If you didn't receive the confirmation email, <a href='%s'>click here to get it sent again</a>.";
$definitions["message.emailTaken"] = "Curses, there is already a member with this email!";
$definitions["message.empty"] = "You must fill out this field.";
$definitions["message.emptyPost"] = "Yeah... uh, you should probably type something in your post.";
$definitions["message.emptyTitle"] = "The title of your conversation can't be blank. I mean, how can anyone click on a blank title? Think about it.";
$definitions["message.esoTalkAlreadyInstalled"] = "<strong>esoTalk is already installed.</strong><br/><small>To reinstall esoTalk, you must remove <strong>config/config.php</strong>.</small>";
$definitions["message.esoTalkUpdateAvailable"] = "A new version of esoTalk, %s, is now available.";
$definitions["message.esoTalkUpdateAvailableHelp"] = "It's recommended to always have the latest version of esoTalk installed to reduce security risk. And hey, there might be some cool new features!";
$definitions["message.esoTalkUpToDate"] = "Your version of esoTalk is up-to-date.";
$definitions["message.esoTalkUpToDateHelp"] = "I'm a poor college student who has spent many hundreds of hours developing esoTalk. If you like it, please consider <a href='%s' target='_blank'>donating</a>.";
$definitions["message.fatalError"] = "<p>esoTalk has encountered an nasty error which is making it impossible to do whatever it is that you're doing. But don't feel down - <strong>here are a few things you can try</strong>:</p>\n<ul>\n<li>Go outside, walk the dog, have a coffee... then <strong><a href='%1\$s'>try again</a></strong>!</li>\n<li>If you are the forum administrator, then you can <strong>get help on the <a href='%2\$s'>esoTalk website</a></strong>.</li>\n<li>Try hitting the computer - that sometimes works for me.</li>\n</ul>";
$definitions["message.fatalErrorInstaller"] = "<p>esoTalk has encountered an nasty error which is making it impossible to do whatever it is that you're doing. But don't feel down - <strong>here are a few things you can try</strong>:</p>\n<ul>\n<li><p><strong>Try again.</strong> Everyone makes mistakes - maybe the computer made one this time!</p></li>\n<li><p><strong>Go back and check your settings.</strong> In particular, make sure your database information is correct.</p></li>\n<li><p><strong>Get help.</strong> Go on the <a href='%s'>esoTalk support forum</a> and search to see if anyone else is having the same problem as you are. If not, start a new conversation about your problem, including the error details below.</p></li>\n</ul>";
$definitions["message.fatalErrorUpgrader"] = "<p>esoTalk has encountered an nasty error which is making it impossible to do whatever it is that you're doing. But don't feel down - <strong>here are a few things you can try</strong>:</p>\n<ul>\n<li><p><strong>Try again.</strong> Everyone makes mistakes - maybe the computer made one this time!</p></li>\n<li><p><strong>Get help.</strong> Go on the <a href='%s'>esoTalk support forum</a> and search to see if anyone else is having the same problem as you are. If not, start a new conversation about your problem, including the error details below.</p></li>\n</ul>";
$definitions["message.fileUploadFailed"] = "Something went wrong and the file you selected could not be uploaded. Perhaps it's too big, or in the wrong format?";
$definitions["message.fileUploadFailedMove"] = "The file you uploaded could not be copied to its destination. Please contact the forum administrator.";
$definitions["message.fileUploadNotImage"] = "The file you uploaded is not an image in an acceptable format.";
$definitions["message.fileUploadTooBig"] = "The file you selected could not be uploaded because it is too big.";
$definitions["message.forgotPasswordHelp"] = "So, you forgot your password! Don't worry, it happens all the time. Simply enter your email address and we'll send you instructions on how to set up a new one.";
$definitions["message.fulltextKeywordWarning"] = "Note that keywords less than 4 characters in length, and common English words such as 'the' and 'for', aren't included in the search criteria.";
$definitions["message.gambitsHelp"] = "Gambits are phrases that describe what you are looking for. Click on a gambit to insert it into the search field. Double-click on a gambit to instantly search for it. Normal search keywords work too!";
$definitions["message.gdNotEnabledWarning"] = "The <strong>GD extension</strong> is not enabled.<br/><small>This is required to resize and save avatars. Get your host or administrator to install/enable it.</small>";
$definitions["message.greaterMySQLVersionRequired"] = "You must have <strong>MySQL 4 or greater</strong> installed and the <a href='http://php.net/manual/en/mysql.installation.php' target='_blank'>MySQL extension enabled in PHP</a>.<br/><small>Please install/upgrade both of these requirements or request that your host or administrator install them.</small>";
$definitions["message.greaterPHPVersionRequired"] = "Your server must have <strong>PHP 5.0.0 or greater</strong> installed to run esoTalk.<br/><small>Please upgrade your PHP installation or request that your host or administrator upgrade the server.</small>";
$definitions["message.incorrectLogin"] = "Your login details were incorrect.";
$definitions["message.incorrectPassword"] = "Your current password is incorrect.";
$definitions["message.installerAdminHelp"] = "esoTalk will use the following information to set up your administrator account on your forum.";
$definitions["message.installerFilesNotWritable"] = "esoTalk cannot write to the following files/folders: <strong>%s</strong>.<br/><small>To resolve this, you must navigate to these files/folders in your FTP client and <strong>chmod</strong> them to <strong>777</strong>.</small>";
$definitions["message.installerMySQLHelp"] = "esoTalk needs access to a MySQL database to store all your forum's data in, such as conversations and posts. If you're unsure of any of these details, you may need to ask your hosting provider.";
$definitions["message.installerWelcome"] = "<p>Welcome to the esoTalk installer! We need a few details from you so we can get your forum set up and ready to go.</p>\n<p>If you have any trouble, get help on the <a href='%s'>esoTalk support forum</a>.</p>";
$definitions["message.invalidChannel"] = "You selected an invalid channel!";
$definitions["message.invalidEmail"] = "Seems this email address isn't valid...";
$definitions["message.invalidUsername"] = "You must choose a username between 3 and 20 alphanumeric characters.";
$definitions["message.javascriptRequired"] = "This page requires JavaScript to function properly. Please enable it!";
$definitions["message.languageUninstalled"] = "The language was uninstalled.";
$definitions["message.locked"] = "Hm, looks like this conversation is <strong>locked</strong>, so you can't reply to it.";
$definitions["message.loginToParticipate"] = "To start conversations or reply to posts, please log in.";
$definitions["message.logInToReply"] = "<a href='%1\$s' class='link-login'>Log In</a> or <a href='%2\$s' class='link-join'>Sign Up</a> to reply!";
$definitions["message.logInToSeeAllConversations"] = "<a href='".URL("user/login")."' class='link-login'>Log in</a> to expose some channels/conversations that may be hidden to guests.";
$definitions["message.memberNotFound"] = "Hm, there doesn't seem to be a member with that name.";
$definitions["message.memberNoPermissionView"] = "That member can't be added because they don't have permission to view the channel that this conversation is in.";
$definitions["message.nameTaken"] = "The name you have entered is taken or is a reserved word.";
$definitions["message.newSearchResults"] = "There has been new activity that has affected your search results. <a href='%s'>Refresh</a>";
$definitions["message.noActivity"] = "%s hasn't done anything on this forum yet!";
$definitions["message.noMembersOnline"] = "No members are currently online.";
$definitions["message.noNotifications"] = "You have no notifications.";
$definitions["message.noPermission"] = "You do not have permisssion to perform this action.";
$definitions["message.noPermissionToReplyInChannel"] = "You don't have permission to reply to conversations in this channel.";
$definitions["message.noPluginsInstalled"] = "No plugins are currently installed.";
$definitions["message.noSearchResults"] = "No conversations matching your search were found.";
$definitions["message.noSearchResultsMembers"] = "No members matching your search were found.";
$definitions["message.noSearchResultsPosts"] = "No posts matching your search were found.";
$definitions["message.noSkinsInstalled"] = "No skins are currently installed.";
$definitions["message.notWritable"] = "<code>%s</code> is not writeable. Try <code>chmod</code>ing it to <code>777</code>, or if it doesn't exist, <code>chmod</code> the folder it is contained within.";
$definitions["message.pageNotFound"] = "The page you're looking for could not be found.";
$definitions["message.passwordChanged"] = "Alright, your password has been changed. Now you can log in! Hey, try not to forget it again, OK?";
$definitions["message.passwordEmailSent"] = "Ok, we've sent you an email containing a link to reset your password. Check your spam folder if you don't receive it within the next minute or two. Yeah, some times we get put through to spam - can you believe it?!";
$definitions["message.passwordsDontMatch"] = "Your passwords do not match.";
$definitions["message.passwordTooShort"] = "Your password is too short.";
$definitions["message.pluginCannotBeEnabled"] = "The plugin <em>%s</em> cannot be enabled: %s";
$definitions["message.pluginDependencyNotMet"] = "To enable this plugin, you must have %s version %s installed and enabled.";
$definitions["message.pluginUninstalled"] = "The plugin was uninstalled.";
$definitions["message.postNotFound"] = "The post you're looking for could not be found.";
$definitions["message.postTooLong"] = "Your post is really, really long! Too long! The maximum number of characters allowed is %s. That's really long!";
$definitions["message.preInstallErrors"] = "The following errors were found with your esoTalk setup. They must be resolved before you can continue the installation.";
$definitions["message.preInstallWarnings"] = "The following errors were found with your esoTalk setup. You can continue the esoTalk install without resolving them, but some esoTalk functionality may be limited.";
$definitions["message.reduceNumberOfGambits"] = "Reduce the number of gambits or search keywords you're using to find a broader range of conversations.";
$definitions["message.registerGlobalsWarning"] = "PHP's <strong>register_globals</strong> setting is enabled.<br/><small>While esoTalk can run with this setting on, it is recommended that it be turned off to increase security and to prevent esoTalk from having problems.</small>";
$definitions["message.registrationClosed"] = "Registration on this forum is not open to the public.";
$definitions["message.removeDirectoryWarning"] = "Hey! Looks like you haven't deleted the <code>%s</code> directory like we told you to! You probably should, just to make sure those hackers can't do anything naughty.";
$definitions["message.safeModeWarning"] = "<strong>Safe mode</strong> is enabled.<br/><small>This could potentially cause problems with esoTalk, but you can still proceed if you cannot turn it off.</small>";
$definitions["message.searchAllConversations"] = "Try searching for this term across all conversations.";
$definitions["message.setNewPassword"] = "Alright! Now, what do you want your new password to be?";
$definitions["message.skinUninstalled"] = "The skin was uninstalled.";
$definitions["message.suspended"] = "Ouch! A forum moderator has <strong>suspended</strong> your account. It sucks, but until the suspension is lifted you won't be able to do much around here. Hey, screw them!";
$definitions["message.suspendMemberHelp"] = "Suspending %s will prevent them from replying to conversations, starting conversations, and viewing private conversations. They will effectively have the same permissions as a guest.";
$definitions["message.tablePrefixConflict"] = "The installer has detected that there is another installation of esoTalk in the same MySQL database with the same table prefix.<br/>To overwrite this installation of esoTalk, click 'Install My Forum' again. <strong>All data will be lost.</strong><br/>If you wish to create another esoTalk installation alongside the existing one, <strong>change the table prefix</strong>.";
$definitions["message.unsuspendMemberHelp"] = "Unsuspending %s will enable them to participate in conversations on this forum again.";
$definitions["message.upgradeSuccessful"] = "esoTalk was successfully upgraded.";
$definitions["message.waitToReply"] = "You must wait at least %s seconds between starting or replying to conversations. Take a deep breath and try again.";
$definitions["message.waitToSearch"] = "Woah, slow down! Looks like you're trying to perform a few too many searches. Wait %s seconds and try again.";


// Emails.
$definitions["email.confirmEmail.body"] = "<p>Someone (hopefully you!) has signed up to the forum '%1\$s' with this email address.</p><p>If this was you, simply visit the following link and your account will be activated:<br>%2\$s</p>";
$definitions["email.confirmEmail.subject"] = "%1\$s, please confirm your email address";
$definitions["email.footer"] = "<p>(If you don't want to receive any emails like this again, you can <a href='%s'>change your notification preferences</a>.)</p>";
$definitions["email.forgotPassword.body"] = "<p>Someone (hopefully you!) has submitted a forgotten password request for your account on the forum '%1\$s'. If you do not wish to change your password, just ignore this email and nothing will happen.</p><p>However, if you did forget your password and wish to set a new one, visit the following link:<br>%2\$s</p>";
$definitions["email.forgotPassword.subject"] = "Did you forget your password, %1\$s?";
$definitions["email.header"] = "<p>Hey %s!</p>";
$definitions["email.mention.body"] = "<p><strong>%1\$s</strong> mentioned you in a post in the conversation <strong>%2\$s</strong>.</p><hr>%3\$s<hr><p>To view the post in context, check out the following link:<br>%4\$s</p>";
$definitions["email.mention.subject"] = "%1\$s mentioned you in a post";
$definitions["email.privateAdd.body"] = "<p>You have been added to a private conversation titled <strong>%1\$s</strong>.</p><hr>%2\$s<hr><p>To view this conversation, check out the following link:<br>%3\$s</p>";
$definitions["email.privateAdd.subject"] = "You have been added to a private conversation";
$definitions["email.post.body"] = "<p><strong>%1\$s</strong> has replied to a conversation which you followed: <strong>%2\$s</strong></p><hr>%3\$s<hr><p>To view the new activity, check out the following link:<br>%4\$s</p>";
$definitions["email.post.subject"] = "[New Reply] %1\$s";


// Translating the gambit system can be quite complex, but we'll do our best to get you through it. :)
// Note: Don't use any html entities in these definitions, except for: &lt; &gt; &amp; &#39;

// Simple gambits
// These gambits are pretty much evaluated as-they-are.
// tag:, author:, contributor:, and quoted: are combined with a value after the colon (:).
// For example: tag:video games, author:myself
$definitions["gambit.author:"] = "autor:";
$definitions["gambit.contributor:"] = "contribuinte:";
$definitions["gambit.member"] = "membro";
$definitions["gambit.myself"] = "eu próprio";
$definitions["gambit.draft"] = "rascunho";
$definitions["gambit.locked"] = "trancado";
$definitions["gambit.order by newest"] = "ordenar por recência";
$definitions["gambit.order by replies"] = "ordenar por respostas";
$definitions["gambit.private"] = "privado";
$definitions["gambit.random"] = "aleatório";
$definitions["gambit.reverse"] = "inverter";
$definitions["gambit.starred"] = "seguido";
$definitions["gambit.muted"] = "silenciado";
$definitions["gambit.sticky"] = "fixo";
$definitions["gambit.unread"] = "não lido";
$definitions["gambit.limit:"] = "limite:";

// Aliases
// These are gambits which tell the gambit system to use another gambit.
// In other words, when you type "active today", the gambit system interprets it as if you typed "active 1 day".
// The first of each pair, the alias, can be anything you want.
// The second, however, must fit with the regular expression pattern defined below (more on that later.)
$definitions["gambit.active today"] = "activo hoje"; // what appears in the gambit cloud
$definitions["gambit.active 1 day"] = "activo 1 dia"; // what it actually evaluates to

$definitions["gambit.has replies"] = "tem respostas";
$definitions["gambit.has >0 replies"] = "tem >0 respostas";
$definitions["gambit.has >10 replies"] = "tem >10 respostas";

$definitions["gambit.has no replies"] = "não tem respostas";
$definitions["gambit.has 0 replies"] = "tem 0 respostas";

$definitions["gambit.dead"] = "morto";
$definitions["gambit.active >30 day"] = "activo >30 dia";

// Units of time
// These are used in the active gambit.
// ex. "[active] [>|<|>=|<=|last] 180 [second|minute|hour|day|week|month|year]"
$definitions["gambit.second"] = "segundo";
$definitions["gambit.minute"] = "minuto";
$definitions["gambit.hour"] = "hora";
$definitions["gambit.day"] = "dia";
$definitions["gambit.week"] = "semana";
$definitions["gambit.month"] = "mês";
$definitions["gambit.year"] = "ano";
$definitions["gambit.last"] = "pela última vez há"; // as in "active last 180 days"
$definitions["gambit.active"] = "activo"; // as in "active last 180 days"

// Now the hard bit. This is a regular expression to test for the "active" gambit.
// The group (?<a> ... ) is the comparison operator (>, <, >=, <=, or last).
// The group (?<b> ... ) is the number (ex. 24).
// The group (?<c> ... ) is the unit of time.
// The languages of "last" and the units of time are defined above.
// However, if you need to reorder the groups, do so carefully, and make sure spaces are written as " *".
$definitions["gambit.gambitActive"] = "/^{$definitions["gambit.active"]} *(?<a>>|<|>=|<=|{$definitions["gambit.last"]})? *(?<b>\d+) *(?<c>{$definitions["gambit.second"]}|{$definitions["gambit.minute"]}|{$definitions["gambit.hour"]}|{$definitions["gambit.day"]}|{$definitions["gambit.week"]}|{$definitions["gambit.month"]}|{$definitions["gambit.year"]})/";

// These appear in the tag cloud. They must fit the regular expression pattern where the ? is a number.
// If the regular expression pattern has been reordered, these gambits must also be reordered (as well as the ones in aliases.)
$definitions["gambit.active last ? hours"] = "{$definitions["gambit.active"]} {$definitions["gambit.last"]} ? {$definitions["gambit.hour"]}s";
$definitions["gambit.active last ? days"] = "{$definitions["gambit.active"]} {$definitions["gambit.last"]} ? {$definitions["gambit.day"]}s";

// This is similar to the regular expression for the active gambit, but for the "has n reply(s)" gambit.
// Usually you just need to change the "has" and "repl".
$definitions["gambit.gambitHasNReplies"] = "/^has *(?<a>>|<|>=|<=)? *(?<b>\d+) *repl/";
