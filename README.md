## thinkphp5 常用的一些扩展类库

> 以下类库都在`\think\helper`命名空间下

## Str 字符串操作

```
// 检查字符串中是否包含某些字符串
Str::contains('我是中国人', '我是');			// true
Str::contains('我是中国人', ['我', '啊'])	;	// true

// 检查字符串是否以某些字符串结尾
Str::endsWith('我是中国人', '中国人')	;		// true
Str::endsWith('我是中国人', ['国', '人'])	;	// true

// 检查字符串是否以某些字符串开头
Str::endsWith('我是中国人', '我是');			// true
Str::endsWith('我是中国人', ['我', '是'])	;	// true

// 获取指定长度的随机字母数字组合的字符串
Str::random(8);			// 'xjBIKyRH'

// 字符串转小写
Str::lower('Abcd');		// 'abcd'

// 字符串转大写
Str::upper('abcd');		// 'ABCD'

// 获取字符串的长度
Str::length('abcd');	// 4

// 截取字符串
Str::substr($string, $start, $length = null);
Str::substr('abcdefg', 2, 3);	// 'cde'

// 驼峰转下划线
Str::snake($value, $delimiter = '_');
Str::snake('AbcDef');			// 'abc_def'

// 下划线(_/-)转驼峰(首字母小写)
Str::camel('abc_def');			// 'abcDef'

// 下划线(_/-)转驼峰(首字母大写)
Str::camel('abc_def');			// 'AbcDef'

// 转为首字母大写的标题格式
Str::title('abc_def');			// 'Abc_Def'
Str::title('abc-def');			// 'Abc-Def'
```

## Hash 创建密码的哈希 $type默认为bcrypt

```
// 创建
Hash::make($value, $type = null, array $options = []);
Hash::make($value, 'md5', ['salt' = 'qq171787869']);

// 检查
Hash::check($value, $hashedValue, $type = null, array $options = []);
Hash::make($value, 'd1a53cf421c3f7466c4313dc5b87b50a', 'md5', ['salt' = 'qq171787869']);

```

## Time 时间戳操作
> 注意设置时区 date_default_timezone_set('PRC');

```
// 今日开始和结束的时间戳
Time::today();		// [1637884800, 1637971199]

// 昨日开始和结束的时间戳
Time::yesterday();	// 同上

// 本周开始和结束的时间戳
Time::week();		// 同上

// 上周开始和结束的时间戳
Time::lastWeek();	// 同上

// 本月开始和结束的时间戳
Time::month();		// 同上

// 上月开始和结束的时间戳
Time::lastMonth();	// 同上

// 今年开始和结束的时间戳
Time::year();		// 同上

// 去年开始和结束的时间戳
Time::lastYear();	// 同上

// 获取7天前零点到现在的时间戳
Time::dayToNow(7)	// 同上

// 获取7天前零点到昨日结束的时间戳
Time::dayToNow(7, false)	// 同上

// 获取7天前的时间戳
Time::daysAgo(7) 		// 1637321689

//  获取7天后的时间戳
Time::daysAfter(7)		// 同上

// 天数转换成秒数
Time::daysToSecond(5) 	// 432000

// 周数转换成秒数
Time::weekToSecond(1) 	// 604800
```
