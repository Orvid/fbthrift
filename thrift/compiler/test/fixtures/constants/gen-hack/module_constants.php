<?hh
/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
class module_CONSTANTS {
  const myInt = 1337;
  const name = "Mark Zuckerberg";
  public static Vector<Map<string, int>> $states = Vector {
      Map {
        "San Diego" => 3211000,
        "Sacramento" => 479600,
        "SF" => 837400,
      },
      Map {
        "New York" => 8406000,
        "Albany" => 98400,
      },
    };
  const x = 1.0;
  const y = 1000000.0;
  const z = 1e+09;
  public static Internship $instagram = new Internship(
      12,
      "Software Engineer",
      Company::INSTAGRAM,
    );
  public static Vector<Range> $kRanges = Vector {
      new Range(
        1,
        2,
      ),
      new Range(
        5,
        6,
      ),
    };
  public static Vector<Internship> $internList = Vector {
      new Internship(
        12,
        "Software Engineer",
        Company::INSTAGRAM,
      ),
      new Internship(
        10,
        "Sales Intern",
        Company::FACEBOOK,
      ),
    };
  const apostrophe = "'";
  const tripleApostrophe = "'''";
  const quotationMark = "\"";
  const backslash = "\\";
  const escaped_a = "\x61";
  public static Map<string, int> $char2ascii = Map {
      "'" => 39,
      "\"" => 34,
      "\\" => 92,
      "\x61" => 97,
    };

  public static array $__values = array(
    "myInt" => 1337,
    "name" => "Mark Zuckerberg",
    "states" => Vector {
        Map {
          "San Diego" => 3211000,
          "Sacramento" => 479600,
          "SF" => 837400,
        },
        Map {
          "New York" => 8406000,
          "Albany" => 98400,
        },
      },
    "x" => 1.0,
    "y" => 1000000.0,
    "z" => 1e+09,
    "instagram" => new Internship(
        12,
        "Software Engineer",
        Company::INSTAGRAM,
      ),
    "kRanges" => Vector {
        new Range(
          1,
          2,
        ),
        new Range(
          5,
          6,
        ),
      },
    "internList" => Vector {
        new Internship(
          12,
          "Software Engineer",
          Company::INSTAGRAM,
        ),
        new Internship(
          10,
          "Sales Intern",
          Company::FACEBOOK,
        ),
      },
    "apostrophe" => "'",
    "tripleApostrophe" => "'''",
    "quotationMark" => "\"",
    "backslash" => "\\",
    "escaped_a" => "\x61",
    "char2ascii" => Map {
        "'" => 39,
        "\"" => 34,
        "\\" => 92,
        "\x61" => 97,
      },
  );
}

