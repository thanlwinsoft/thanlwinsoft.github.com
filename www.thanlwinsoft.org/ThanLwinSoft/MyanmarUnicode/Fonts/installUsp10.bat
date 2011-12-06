echo off
mkdir %TEMP%\volt
\installers\VOLTSupplementalFiles.exe /T:%TEMP%\volt
%SystemRoot%\system32\expand.exe %TEMP%\volt\usp.cab -F:usp10.dll %TEMP%\volt
pushd %TEMP%\volt
echo Copy to dll cache
copy /y usp10.dll %SystemRoot%\system32\dllcache
echo Move dll in system32
del %SystemRoot%\system32\usp10.orig.dll
move %SystemRoot%\system32\usp10.dll %SystemRoot%\system32\usp10.orig.dll
echo Copy replacement into system32
copy /Y usp10.dll %SystemRoot%\system32
echo Check for Office10
if exist "%ProgramFiles%\Common Files\Microsoft Shared\Office10\usp10.dll" (
  pushd "%ProgramFiles%\Common Files\Microsoft Shared\Office10"
  echo move dll in Office10
  del usp10.orig.dll
  move usp10.dll usp10.orig.dll
  echo copy replacement into Office10
  copy /Y %TEMP%\volt\usp10.dll usp10.dll
  popd
)
popd
dir %SystemRoot%\system32\usp10.dll "%ProgramFiles%\Common Files\Microsoft Shared\Office10\usp10.dll"
echo If you get a Windows File Protection Message. Click Cancel, then Yes. 
echo Please reboot for dll changes to take effect
pause
