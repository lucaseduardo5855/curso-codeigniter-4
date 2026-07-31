@echo off
echo Escolha uma opcao:
echo 1 - Adicionar pin ao LeNgocKhoa.Laragon
echo 2 - Atualizar todos os pacotes via Winget
echo.
set /p escolha="Digite o numero da opcao desejada: "

if "%escolha%"=="1" (
    winget pin add LeNgocKhoa.Laragon
) else if "%escolha%"=="2" (
    winget upgrade --all --wait --include-unknown -i
) else (
    echo Opcao invalida! Tente novamente!
)

pause